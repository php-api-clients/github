<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Stubbed\Accounts;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed;

final class CbAccountIdRcb
{
    function get($account_id): GetSubscriptionPlanForAccountStubbed
    {
        return new GetSubscriptionPlanForAccountStubbed($account_id);
    }
}
