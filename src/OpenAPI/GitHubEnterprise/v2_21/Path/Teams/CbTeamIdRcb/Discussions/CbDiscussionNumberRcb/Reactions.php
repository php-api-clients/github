<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForTeamDiscussionLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForTeamDiscussionLegacy;

final class Reactions
{
    function get($team_id, $discussion_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionLegacy
    {
        return new ListForTeamDiscussionLegacy($team_id, $discussion_number, $content, $per_page, $page);
    }

    function post($team_id, $discussion_number): CreateForTeamDiscussionLegacy
    {
        return new CreateForTeamDiscussionLegacy($team_id, $discussion_number);
    }
}
