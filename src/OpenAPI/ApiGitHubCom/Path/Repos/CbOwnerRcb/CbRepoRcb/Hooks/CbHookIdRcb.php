<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks;

final class CbHookIdRcb
{
    function get($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhook($owner, $repo, $hook_id);
    }
    function delete($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteWebhook($owner, $repo, $hook_id);
    }
    function patch($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhook($owner, $repo, $hook_id);
    }
}
