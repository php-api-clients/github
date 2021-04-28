<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts;

final class CbArtifactIdRcb
{
    function get($owner, $repo, $artifact_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetArtifactOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetArtifactOperation($owner, $repo, $artifact_id);
    }
    function delete($owner, $repo, $artifact_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteArtifactOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteArtifactOperation($owner, $repo, $artifact_id);
    }
}
