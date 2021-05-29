<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Accounts;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountOperation;

final class CbAccountIdRcb
{
    function get($account_id): GetSubscriptionPlanForAccountOperation
    {
        return new GetSubscriptionPlanForAccountOperation($account_id);
    }
}
