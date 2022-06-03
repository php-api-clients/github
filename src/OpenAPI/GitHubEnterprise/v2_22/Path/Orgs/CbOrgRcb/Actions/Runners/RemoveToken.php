<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\Runners;

final class RemoveToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateRemoveTokenForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateRemoveTokenForOrg($org);
    }
}
