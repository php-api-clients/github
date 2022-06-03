<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $release_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForRelease($owner, $repo, $release_id, $reaction_id);
    }
}
