<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Stubbed\Accounts;

final class CbAccountIdRcb
{
    function get($account_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbedOperation($account_id);
    }
}
