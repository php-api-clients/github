<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Issues
{
    function get($owner, $repo, $milestone, string $state = 'open', $assignee, $creator, $mentioned, $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo($owner, $repo, $milestone, $state, $assignee, $creator, $mentioned, $labels, $sort, $direction, $since, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create($owner, $repo);
    }
}
