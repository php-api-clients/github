<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateOperation;

final class CbOrgRcb
{
    function get($org): GetOperation
    {
        return new GetOperation($org);
    }

    function patch($org): UpdateOperation
    {
        return new UpdateOperation($org);
    }
}
