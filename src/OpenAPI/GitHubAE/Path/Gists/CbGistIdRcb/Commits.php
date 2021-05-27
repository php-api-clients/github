<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb;

final class Commits
{
    function get($gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommitsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommitsOperation($gist_id, $per_page, $page);
    }
}
