<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $comment_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussionComment($org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
}
