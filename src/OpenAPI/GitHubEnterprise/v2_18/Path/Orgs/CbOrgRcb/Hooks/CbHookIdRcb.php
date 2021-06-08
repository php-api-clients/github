<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb\Hooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\DeleteWebhook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\GetWebhook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\UpdateWebhook;

final class CbHookIdRcb
{
    function get($org, $hook_id): GetWebhook
    {
        return new GetWebhook($org, $hook_id);
    }

    function delete($org, $hook_id): DeleteWebhook
    {
        return new DeleteWebhook($org, $hook_id);
    }

    function patch($org, $hook_id): UpdateWebhook
    {
        return new UpdateWebhook($org, $hook_id);
    }
}
