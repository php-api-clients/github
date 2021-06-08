<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Licenses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\Get;

final class CbLicenseRcb
{
    function get($license): Get
    {
        return new Get($license);
    }
}
