<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForReleaseOperation;

final class Reactions
{
    function post($owner, $repo, $release_id): CreateForReleaseOperation
    {
        return new CreateForReleaseOperation($owner, $repo, $release_id);
    }
}
