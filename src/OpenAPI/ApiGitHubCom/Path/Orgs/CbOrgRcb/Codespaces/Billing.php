<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Codespaces;

final class Billing
{
    function put($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling($org);
    }
}
