<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb\Settings\Billing;

final class SharedStorage
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetSharedStorageBillingUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetSharedStorageBillingUserOperation($username);
    }
}
