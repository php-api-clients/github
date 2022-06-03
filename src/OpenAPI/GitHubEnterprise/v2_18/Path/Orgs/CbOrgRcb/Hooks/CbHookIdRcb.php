<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb\Hooks;

final class CbHookIdRcb
{
    function get($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\GetWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\GetWebhook($org, $hook_id);
    }
    function delete($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\DeleteWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\DeleteWebhook($org, $hook_id);
    }
    function patch($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\UpdateWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\UpdateWebhook($org, $hook_id);
    }
}
