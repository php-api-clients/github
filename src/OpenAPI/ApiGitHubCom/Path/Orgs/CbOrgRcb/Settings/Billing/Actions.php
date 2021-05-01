<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Orgs\CbOrgRcb\Settings\Billing;

final class Actions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrgOperation($org);
    }
}
