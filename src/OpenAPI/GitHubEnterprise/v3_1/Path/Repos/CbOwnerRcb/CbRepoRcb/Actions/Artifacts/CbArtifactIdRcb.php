<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteArtifactOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetArtifactOperation;

final class CbArtifactIdRcb
{
    function get($owner, $repo, $artifact_id): GetArtifactOperation
    {
        return new GetArtifactOperation($owner, $repo, $artifact_id);
    }

    function delete($owner, $repo, $artifact_id): DeleteArtifactOperation
    {
        return new DeleteArtifactOperation($owner, $repo, $artifact_id);
    }
}
