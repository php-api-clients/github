<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb\Hooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\DeleteWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\GetWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\UpdateWebhookOperation;

final class CbHookIdRcb
{
    function get($org, $hook_id): GetWebhookOperation
    {
        return new GetWebhookOperation($org, $hook_id);
    }

    function delete($org, $hook_id): DeleteWebhookOperation
    {
        return new DeleteWebhookOperation($org, $hook_id);
    }

    function patch($org, $hook_id): UpdateWebhookOperation
    {
        return new UpdateWebhookOperation($org, $hook_id);
    }
}
