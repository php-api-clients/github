<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteArtifact;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetArtifact;

final class CbArtifactIdRcb
{
    function get($owner, $repo, $artifact_id): GetArtifact
    {
        return new GetArtifact($owner, $repo, $artifact_id);
    }

    function delete($owner, $repo, $artifact_id): DeleteArtifact
    {
        return new DeleteArtifact($owner, $repo, $artifact_id);
    }
}
