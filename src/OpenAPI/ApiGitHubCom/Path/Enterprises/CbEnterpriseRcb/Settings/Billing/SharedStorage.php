<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingGhe;

final class SharedStorage
{
    function get($enterprise): GetSharedStorageBillingGhe
    {
        return new GetSharedStorageBillingGhe($enterprise);
    }
}
