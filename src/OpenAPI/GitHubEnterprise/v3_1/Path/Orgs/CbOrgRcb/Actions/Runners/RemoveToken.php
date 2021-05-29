<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRemoveTokenForOrg;

final class RemoveToken
{
    function post($org): CreateRemoveTokenForOrg
    {
        return new CreateRemoveTokenForOrg($org);
    }
}
