<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Licenses;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\Get;

final class CbLicenseRcb
{
    function get($license): Get
    {
        return new Get($license);
    }
}
