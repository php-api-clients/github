<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateRemoveTokenForOrg;

final class RemoveToken
{
    function post($org): CreateRemoveTokenForOrg
    {
        return new CreateRemoveTokenForOrg($org);
    }
}
