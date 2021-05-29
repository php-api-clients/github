<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrgOperation;

final class SharedStorage
{
    function get($org): GetSharedStorageBillingOrgOperation
    {
        return new GetSharedStorageBillingOrgOperation($org);
    }
}
