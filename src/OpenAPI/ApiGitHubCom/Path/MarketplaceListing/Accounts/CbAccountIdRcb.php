<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\MarketplaceListing\Accounts;

final class CbAccountIdRcb
{
    function get($account_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountOperation($account_id);
    }
}
