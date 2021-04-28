<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb\Settings\Billing;

final class Packages
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubPackagesBillingUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubPackagesBillingUserOperation($username);
    }
}
