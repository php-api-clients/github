<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Codespaces\Billing;

final class SelectedUsers
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBillingUsers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBillingUsers($org);
    }
    function delete($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteCodespacesBillingUsers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteCodespacesBillingUsers($org);
    }
}
