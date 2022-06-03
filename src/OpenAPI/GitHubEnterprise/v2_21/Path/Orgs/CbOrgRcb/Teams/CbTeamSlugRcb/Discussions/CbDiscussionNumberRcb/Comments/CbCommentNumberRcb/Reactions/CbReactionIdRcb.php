<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $comment_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\DeleteForTeamDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\DeleteForTeamDiscussionComment($org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
}
