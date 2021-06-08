<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Licenses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Licenses\Get;

final class CbLicenseRcb
{
    function get($license): Get
    {
        return new Get($license);
    }
}
