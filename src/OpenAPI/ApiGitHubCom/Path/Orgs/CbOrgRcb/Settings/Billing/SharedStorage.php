<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg;

final class SharedStorage
{
    function get($org): GetSharedStorageBillingOrg
    {
        return new GetSharedStorageBillingOrg($org);
    }
}
