<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision;

final class CbShaRcb
{
    function get($gist_id, $sha): GetRevision
    {
        return new GetRevision($gist_id, $sha);
    }
}
