<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\CreateForCommitComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\ListForCommitComment;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1): ListForCommitComment
    {
        return new ListForCommitComment($owner, $repo, $comment_id, $content, $per_page, $page);
    }

    function post($owner, $repo, $comment_id): CreateForCommitComment
    {
        return new CreateForCommitComment($owner, $repo, $comment_id);
    }
}
