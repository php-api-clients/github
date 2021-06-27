<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussion
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussion($org, $team_slug, $discussion_number, $reaction_id);
    }
}
