<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\CreateCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\ListCommentsOperation;

final class Comments
{
    function get($gist_id, int $per_page = 30, int $page = 1): ListCommentsOperation
    {
        return new ListCommentsOperation($gist_id, $per_page, $page);
    }

    function post($gist_id): CreateCommentOperation
    {
        return new CreateCommentOperation($gist_id);
    }
}
