<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb\Settings\Billing;

final class Actions
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubActionsBillingUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubActionsBillingUserOperation($username);
    }
}
