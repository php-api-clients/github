<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $comment_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\DeleteForCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\DeleteForCommitComment($owner, $repo, $comment_id, $reaction_id);
    }
}
