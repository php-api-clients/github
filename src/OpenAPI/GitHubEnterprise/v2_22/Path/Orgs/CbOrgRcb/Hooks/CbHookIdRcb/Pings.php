<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

final class Pings
{
    function post($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\PingWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\PingWebhook($org, $hook_id);
    }
}
