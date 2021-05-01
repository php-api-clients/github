<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Users\CbUsernameRcb\Settings\Billing;

final class Packages
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUserOperation($username);
    }
}
