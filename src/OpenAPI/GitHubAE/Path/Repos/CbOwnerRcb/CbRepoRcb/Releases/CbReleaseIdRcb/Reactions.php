<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForRelease;

final class Reactions
{
    function post($owner, $repo, $release_id): CreateForRelease
    {
        return new CreateForRelease($owner, $repo, $release_id);
    }
}
