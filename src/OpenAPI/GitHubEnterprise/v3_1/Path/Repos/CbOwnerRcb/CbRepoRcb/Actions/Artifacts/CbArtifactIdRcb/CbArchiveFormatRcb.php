<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb;

final class CbArchiveFormatRcb
{
    function get($owner, $repo, $artifact_id, $archive_format) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadArtifact
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadArtifact($owner, $repo, $artifact_id, $archive_format);
    }
}
