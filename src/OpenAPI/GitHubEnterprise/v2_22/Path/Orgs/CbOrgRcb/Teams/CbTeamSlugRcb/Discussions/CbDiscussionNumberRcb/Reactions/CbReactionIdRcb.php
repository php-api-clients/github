<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\DeleteForTeamDiscussionOperation;

final class CbReactionIdRcb
{
    function delete($org, $team_slug, $discussion_number, $reaction_id): DeleteForTeamDiscussionOperation
    {
        return new DeleteForTeamDiscussionOperation($org, $team_slug, $discussion_number, $reaction_id);
    }
}
