<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Licenses;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetOperation;

final class CbLicenseRcb
{
    function get($license): GetOperation
    {
        return new GetOperation($license);
    }
}
