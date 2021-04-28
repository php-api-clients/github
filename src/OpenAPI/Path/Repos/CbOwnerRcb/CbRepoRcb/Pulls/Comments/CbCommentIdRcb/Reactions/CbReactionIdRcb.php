<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $comment_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\Operation\Reactions\DeleteForPullRequestCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Reactions\DeleteForPullRequestCommentOperation($owner, $repo, $comment_id, $reaction_id);
    }
}
