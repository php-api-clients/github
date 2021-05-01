<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Users\CbUsernameRcb\Settings\Billing;

final class Actions
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUserOperation($username);
    }
}
