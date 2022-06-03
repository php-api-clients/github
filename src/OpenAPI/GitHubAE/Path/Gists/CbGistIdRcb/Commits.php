<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb;

final class Commits
{
    function get($gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommits
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommits($gist_id, $per_page, $page);
    }
}
