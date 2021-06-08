<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Accounts;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount;

final class CbAccountIdRcb
{
    function get($account_id): GetSubscriptionPlanForAccount
    {
        return new GetSubscriptionPlanForAccount($account_id);
    }
}
