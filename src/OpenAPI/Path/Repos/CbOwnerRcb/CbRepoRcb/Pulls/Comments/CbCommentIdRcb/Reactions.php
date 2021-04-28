<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Reactions\ListForPullRequestReviewCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Reactions\ListForPullRequestReviewCommentOperation($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    function post($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Reactions\CreateForPullRequestReviewCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Reactions\CreateForPullRequestReviewCommentOperation($owner, $repo, $comment_id);
    }
}
