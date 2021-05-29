<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifactOperation;

final class CbArchiveFormatRcb
{
    function get($owner, $repo, $artifact_id, $archive_format): DownloadArtifactOperation
    {
        return new DownloadArtifactOperation($owner, $repo, $artifact_id, $archive_format);
    }
}
