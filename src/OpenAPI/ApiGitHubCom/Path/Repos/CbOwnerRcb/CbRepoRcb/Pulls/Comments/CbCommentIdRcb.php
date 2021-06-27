<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment($owner, $repo, $comment_id);
    }
    function delete($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment($owner, $repo, $comment_id);
    }
    function patch($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment($owner, $repo, $comment_id);
    }
}
