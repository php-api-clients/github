<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Enterprises\CbEnterpriseRcb\Settings\Billing;

final class Actions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingGheOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingGheOperation($enterprise);
    }
}
