<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForCommitComment;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $comment_id, $reaction_id): DeleteForCommitComment
    {
        return new DeleteForCommitComment($owner, $repo, $comment_id, $reaction_id);
    }
}
