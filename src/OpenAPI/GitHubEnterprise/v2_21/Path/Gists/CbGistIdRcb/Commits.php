<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\ListCommitsOperation;

final class Commits
{
    function get($gist_id, int $per_page = 30, int $page = 1): ListCommitsOperation
    {
        return new ListCommitsOperation($gist_id, $per_page, $page);
    }
}
