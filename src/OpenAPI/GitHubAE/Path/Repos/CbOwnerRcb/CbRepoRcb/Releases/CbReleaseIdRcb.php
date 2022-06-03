<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

final class CbReleaseIdRcb
{
    function get($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetRelease($owner, $repo, $release_id);
    }
    function delete($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteRelease($owner, $repo, $release_id);
    }
    function patch($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateRelease($owner, $repo, $release_id);
    }
}
