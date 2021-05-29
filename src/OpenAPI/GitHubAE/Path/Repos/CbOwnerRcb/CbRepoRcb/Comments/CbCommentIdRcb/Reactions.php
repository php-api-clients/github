<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForCommitCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForCommitCommentOperation;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1): ListForCommitCommentOperation
    {
        return new ListForCommitCommentOperation($owner, $repo, $comment_id, $content, $per_page, $page);
    }

    function post($owner, $repo, $comment_id): CreateForCommitCommentOperation
    {
        return new CreateForCommitCommentOperation($owner, $repo, $comment_id);
    }
}
