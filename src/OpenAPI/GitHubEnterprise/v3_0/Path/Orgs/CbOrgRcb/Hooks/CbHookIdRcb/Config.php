<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetWebhookConfigForOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\UpdateWebhookConfigForOrgOperation;

final class Config
{
    function get($org, $hook_id): GetWebhookConfigForOrgOperation
    {
        return new GetWebhookConfigForOrgOperation($org, $hook_id);
    }

    function patch($org, $hook_id): UpdateWebhookConfigForOrgOperation
    {
        return new UpdateWebhookConfigForOrgOperation($org, $hook_id);
    }
}
