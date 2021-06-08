<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo;

final class Artifacts
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListArtifactsForRepo
    {
        return new ListArtifactsForRepo($owner, $repo, $per_page, $page);
    }
}
