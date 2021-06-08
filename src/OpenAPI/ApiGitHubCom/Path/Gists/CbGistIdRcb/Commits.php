<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListCommits;

final class Commits
{
    function get($gist_id, int $per_page = 30, int $page = 1): ListCommits
    {
        return new ListCommits($gist_id, $per_page, $page);
    }
}
