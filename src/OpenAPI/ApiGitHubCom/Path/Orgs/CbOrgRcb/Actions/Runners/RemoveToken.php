<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Runners;

final class RemoveToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg($org);
    }
}
