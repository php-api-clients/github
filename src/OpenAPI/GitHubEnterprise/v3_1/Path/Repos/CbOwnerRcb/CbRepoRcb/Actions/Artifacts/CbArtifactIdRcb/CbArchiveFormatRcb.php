<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadArtifact;

final class CbArchiveFormatRcb
{
    function get($owner, $repo, $artifact_id, $archive_format): DownloadArtifact
    {
        return new DownloadArtifact($owner, $repo, $artifact_id, $archive_format);
    }
}
