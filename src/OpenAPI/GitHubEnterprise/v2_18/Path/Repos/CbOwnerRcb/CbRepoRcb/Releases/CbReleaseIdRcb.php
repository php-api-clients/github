<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\DeleteRelease;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetRelease;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\UpdateRelease;

final class CbReleaseIdRcb
{
    function get($owner, $repo, $release_id): GetRelease
    {
        return new GetRelease($owner, $repo, $release_id);
    }

    function delete($owner, $repo, $release_id): DeleteRelease
    {
        return new DeleteRelease($owner, $repo, $release_id);
    }

    function patch($owner, $repo, $release_id): UpdateRelease
    {
        return new UpdateRelease($owner, $repo, $release_id);
    }
}
