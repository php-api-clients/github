<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussionOperation($org, $team_slug, $discussion_number, $reaction_id);
    }
}
