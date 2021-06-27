<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Pulls
{
    function get($owner, $repo, string $state = 'open', $head, $base, string $sort = 'created', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List($owner, $repo, $state, $head, $base, $sort, $direction, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create($owner, $repo);
    }
}
