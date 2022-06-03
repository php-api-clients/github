<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Hooks;

final class CbHookIdRcb
{
    function get($hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGlobalWebhook($hook_id);
    }
    function delete($hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteGlobalWebhook($hook_id);
    }
    function patch($hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateGlobalWebhook($hook_id);
    }
}
