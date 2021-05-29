<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussionCommentOperation;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $comment_number, $reaction_id): DeleteForTeamDiscussionCommentOperation
    {
        return new DeleteForTeamDiscussionCommentOperation($org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
}
