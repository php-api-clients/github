<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\GetRevision;

final class CbShaRcb
{
    function get($gist_id, $sha): GetRevision
    {
        return new GetRevision($gist_id, $sha);
    }
}
