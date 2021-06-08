<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForPullRequestComment;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $comment_id, $reaction_id): DeleteForPullRequestComment
    {
        return new DeleteForPullRequestComment($owner, $repo, $comment_id, $reaction_id);
    }
}
