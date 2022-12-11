<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

final class Caches
{
    function get($owner, $repo, int $per_page = 30, int $page = 1, $ref, $key, string $sort = 'last_accessed_at', string $direction = 'desc') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList($owner, $repo, $per_page, $page, $ref, $key, $sort, $direction);
    }
    function delete($owner, $repo, $key, $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey($owner, $repo, $key, $ref);
    }
}
