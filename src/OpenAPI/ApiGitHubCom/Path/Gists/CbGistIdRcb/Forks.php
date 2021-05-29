<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ForkOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForksOperation;

final class Forks
{
    function get($gist_id, int $per_page = 30, int $page = 1): ListForksOperation
    {
        return new ListForksOperation($gist_id, $per_page, $page);
    }

    function post($gist_id): ForkOperation
    {
        return new ForkOperation($gist_id);
    }
}
