<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\CreateForTeamDiscussionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\ListForTeamDiscussionOperation;

final class Reactions
{
    function get(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionOperation
    {
        return new ListForTeamDiscussionOperation($accept, $team_id, $discussion_number, $content, $per_page, $page);
    }

    function post(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number): CreateForTeamDiscussionOperation
    {
        return new CreateForTeamDiscussionOperation($accept, $team_id, $discussion_number);
    }
}
