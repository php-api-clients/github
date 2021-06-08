<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetWebhookConfigForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateWebhookConfigForOrg;

final class Config
{
    function get($org, $hook_id): GetWebhookConfigForOrg
    {
        return new GetWebhookConfigForOrg($org, $hook_id);
    }

    function patch($org, $hook_id): UpdateWebhookConfigForOrg
    {
        return new UpdateWebhookConfigForOrg($org, $hook_id);
    }
}
