<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $comment_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\Operation\Reactions\DeleteForIssueCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Reactions\DeleteForIssueCommentOperation($owner, $repo, $comment_id, $reaction_id);
    }
}
