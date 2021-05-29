<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CreateComment;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListComments;

final class Comments
{
    function get($gist_id, int $per_page = 30, int $page = 1): ListComments
    {
        return new ListComments($gist_id, $per_page, $page);
    }

    function post($gist_id): CreateComment
    {
        return new CreateComment($gist_id);
    }
}
