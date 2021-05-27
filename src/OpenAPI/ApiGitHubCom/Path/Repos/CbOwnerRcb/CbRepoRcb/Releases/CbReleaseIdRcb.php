<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

final class CbReleaseIdRcb
{
    function get($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseOperation($owner, $repo, $release_id);
    }
    function delete($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseOperation($owner, $repo, $release_id);
    }
    function patch($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseOperation($owner, $repo, $release_id);
    }
}
