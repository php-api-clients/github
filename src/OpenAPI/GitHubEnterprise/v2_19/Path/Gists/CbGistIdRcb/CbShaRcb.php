<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\GetRevisionOperation;

final class CbShaRcb
{
    function get($gist_id, $sha): GetRevisionOperation
    {
        return new GetRevisionOperation($gist_id, $sha);
    }
}
