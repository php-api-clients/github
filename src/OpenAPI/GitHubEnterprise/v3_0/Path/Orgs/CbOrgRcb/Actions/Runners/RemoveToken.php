<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\\Orgs\CbOrgRcb\Actions\Runners;

final class RemoveToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CreateRemoveTokenForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CreateRemoveTokenForOrgOperation($org);
    }
}
