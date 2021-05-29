<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForPullRequestReviewCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForPullRequestReviewCommentOperation;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1): ListForPullRequestReviewCommentOperation
    {
        return new ListForPullRequestReviewCommentOperation($owner, $repo, $comment_id, $content, $per_page, $page);
    }

    function post($owner, $repo, $comment_id): CreateForPullRequestReviewCommentOperation
    {
        return new CreateForPullRequestReviewCommentOperation($owner, $repo, $comment_id);
    }
}
