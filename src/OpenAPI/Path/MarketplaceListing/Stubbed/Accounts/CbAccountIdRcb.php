<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\MarketplaceListing\Stubbed\Accounts;

final class CbAccountIdRcb
{
    function get($account_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetSubscriptionPlanForAccountStubbedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetSubscriptionPlanForAccountStubbedOperation($account_id);
    }
}
