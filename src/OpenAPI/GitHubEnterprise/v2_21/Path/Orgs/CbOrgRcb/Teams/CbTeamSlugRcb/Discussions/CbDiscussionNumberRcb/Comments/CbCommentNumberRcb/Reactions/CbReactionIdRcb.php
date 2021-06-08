<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\DeleteForTeamDiscussionComment;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $comment_number, $reaction_id): DeleteForTeamDiscussionComment
    {
        return new DeleteForTeamDiscussionComment($org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
}
