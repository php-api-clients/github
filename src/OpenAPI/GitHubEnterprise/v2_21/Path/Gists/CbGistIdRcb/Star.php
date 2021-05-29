<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\CheckIsStarredOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\StarOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\UnstarOperation;

final class Star
{
    function get($gist_id): CheckIsStarredOperation
    {
        return new CheckIsStarredOperation($gist_id);
    }

    function put($gist_id): StarOperation
    {
        return new StarOperation($gist_id);
    }

    function delete($gist_id): UnstarOperation
    {
        return new UnstarOperation($gist_id);
    }
}
