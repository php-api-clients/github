<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

final class Reactions
{
    function post($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForReleaseOperation($owner, $repo, $release_id);
    }
}
