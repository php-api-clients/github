<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update;

final class CbOrgRcb
{
    function get($org): Get
    {
        return new Get($org);
    }

    function patch($org): Update
    {
        return new Update($org);
    }
}
