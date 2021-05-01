<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts;

final class CbArtifactIdRcb
{
    function get($owner, $repo, $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetArtifactOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetArtifactOperation($owner, $repo, $artifact_id);
    }
    function delete($owner, $repo, $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\DeleteArtifactOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\DeleteArtifactOperation($owner, $repo, $artifact_id);
    }
}
