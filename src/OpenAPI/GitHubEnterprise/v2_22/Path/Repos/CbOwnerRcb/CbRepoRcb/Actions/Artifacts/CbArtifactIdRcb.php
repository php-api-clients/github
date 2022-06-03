<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts;

final class CbArtifactIdRcb
{
    function get($owner, $repo, $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetArtifact
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetArtifact($owner, $repo, $artifact_id);
    }
    function delete($owner, $repo, $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\DeleteArtifact
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\DeleteArtifact($owner, $repo, $artifact_id);
    }
}
