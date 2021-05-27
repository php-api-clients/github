<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

final class Config
{
    function get($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetWebhookConfigForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetWebhookConfigForOrgOperation($org, $hook_id);
    }
    function patch($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateWebhookConfigForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateWebhookConfigForOrgOperation($org, $hook_id);
    }
}
