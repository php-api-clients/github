<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacyOperation;

final class Reactions
{
    function get($team_id, $discussion_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionLegacyOperation
    {
        return new ListForTeamDiscussionLegacyOperation($team_id, $discussion_number, $content, $per_page, $page);
    }

    function post($team_id, $discussion_number): CreateForTeamDiscussionLegacyOperation
    {
        return new CreateForTeamDiscussionLegacyOperation($team_id, $discussion_number);
    }
}
