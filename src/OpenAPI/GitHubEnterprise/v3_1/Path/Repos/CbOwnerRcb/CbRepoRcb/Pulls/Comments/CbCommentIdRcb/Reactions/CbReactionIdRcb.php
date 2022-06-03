<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $comment_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForPullRequestComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForPullRequestComment($owner, $repo, $comment_id, $reaction_id);
    }
}
