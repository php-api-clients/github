<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Licenses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Licenses\GetOperation;

final class CbLicenseRcb
{
    function get($license): GetOperation
    {
        return new GetOperation($license);
    }
}
