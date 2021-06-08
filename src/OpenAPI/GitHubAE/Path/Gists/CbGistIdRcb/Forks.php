<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Fork;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForks;

final class Forks
{
    function get($gist_id, int $per_page = 30, int $page = 1): ListForks
    {
        return new ListForks($gist_id, $per_page, $page);
    }

    function post($gist_id): Fork
    {
        return new Fork($gist_id);
    }
}
