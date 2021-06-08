<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussion;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussion;

final class Reactions
{
    function get(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussion
    {
        return new ListForTeamDiscussion($accept, $team_id, $discussion_number, $content, $per_page, $page);
    }

    function post(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number): CreateForTeamDiscussion
    {
        return new CreateForTeamDiscussion($accept, $team_id, $discussion_number);
    }
}
