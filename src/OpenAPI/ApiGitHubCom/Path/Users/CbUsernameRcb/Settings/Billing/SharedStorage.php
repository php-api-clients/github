<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Users\CbUsernameRcb\Settings\Billing;

final class SharedStorage
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUserOperation($username);
    }
}
