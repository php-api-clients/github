<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussion;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $reaction_id): DeleteForTeamDiscussion
    {
        return new DeleteForTeamDiscussion($org, $team_slug, $discussion_number, $reaction_id);
    }
}