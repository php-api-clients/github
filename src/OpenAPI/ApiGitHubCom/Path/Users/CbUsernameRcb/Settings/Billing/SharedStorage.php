<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUserOperation;

final class SharedStorage
{
    function get($username): GetSharedStorageBillingUserOperation
    {
        return new GetSharedStorageBillingUserOperation($username);
    }
}
