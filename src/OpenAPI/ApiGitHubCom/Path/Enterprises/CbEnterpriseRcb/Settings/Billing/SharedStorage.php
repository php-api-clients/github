<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingGheOperation;

final class SharedStorage
{
    function get($enterprise): GetSharedStorageBillingGheOperation
    {
        return new GetSharedStorageBillingGheOperation($enterprise);
    }
}
