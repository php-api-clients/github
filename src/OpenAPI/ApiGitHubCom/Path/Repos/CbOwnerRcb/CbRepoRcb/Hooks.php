<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Hooks
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks($owner, $repo, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook($owner, $repo);
    }
}
