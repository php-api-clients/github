<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseOperation;

final class CbReleaseIdRcb
{
    function get($owner, $repo, $release_id): GetReleaseOperation
    {
        return new GetReleaseOperation($owner, $repo, $release_id);
    }

    function delete($owner, $repo, $release_id): DeleteReleaseOperation
    {
        return new DeleteReleaseOperation($owner, $repo, $release_id);
    }

    function patch($owner, $repo, $release_id): UpdateReleaseOperation
    {
        return new UpdateReleaseOperation($owner, $repo, $release_id);
    }
}
