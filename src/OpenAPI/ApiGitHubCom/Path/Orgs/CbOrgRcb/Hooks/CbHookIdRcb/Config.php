<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

final class Config
{
    function get($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg($org, $hook_id);
    }
    function patch($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg($org, $hook_id);
    }
}
