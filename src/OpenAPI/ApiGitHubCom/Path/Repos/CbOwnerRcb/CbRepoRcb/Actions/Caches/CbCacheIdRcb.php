<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches;

final class CbCacheIdRcb
{
    function delete($owner, $repo, $cache_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById($owner, $repo, $cache_id);
    }
}
