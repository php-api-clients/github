<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb;

final class CbArchiveFormatRcb
{
    function get($owner, $repo, $artifact_id, $archive_format) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadArtifact
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadArtifact($owner, $repo, $artifact_id, $archive_format);
    }
}
