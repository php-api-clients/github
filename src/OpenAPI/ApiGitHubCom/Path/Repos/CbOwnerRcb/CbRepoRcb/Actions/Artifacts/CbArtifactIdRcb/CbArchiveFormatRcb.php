<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb;

final class CbArchiveFormatRcb
{
    function get($owner, $repo, $artifact_id, $archive_format) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifactOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifactOperation($owner, $repo, $artifact_id, $archive_format);
    }
}
