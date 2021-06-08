<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\Get;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\Update;

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
