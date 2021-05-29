<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussion;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussions;

final class Discussions
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussions
    {
        return new ListDiscussions($accept, $team_id, $direction, $per_page, $page);
    }

    function post(string $accept = 'application/vnd.github.echo-preview+json', $team_id): CreateDiscussion
    {
        return new CreateDiscussion($accept, $team_id);
    }
}
