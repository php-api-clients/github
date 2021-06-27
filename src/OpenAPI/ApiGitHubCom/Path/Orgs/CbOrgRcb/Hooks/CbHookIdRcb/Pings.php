<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

final class Pings
{
    function post($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook($org, $hook_id);
    }
}
