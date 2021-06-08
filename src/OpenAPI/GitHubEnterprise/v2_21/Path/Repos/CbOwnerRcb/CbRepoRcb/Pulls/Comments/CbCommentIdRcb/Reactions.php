<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForPullRequestReviewComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForPullRequestReviewComment;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1): ListForPullRequestReviewComment
    {
        return new ListForPullRequestReviewComment($owner, $repo, $comment_id, $content, $per_page, $page);
    }

    function post($owner, $repo, $comment_id): CreateForPullRequestReviewComment
    {
        return new CreateForPullRequestReviewComment($owner, $repo, $comment_id);
    }
}
