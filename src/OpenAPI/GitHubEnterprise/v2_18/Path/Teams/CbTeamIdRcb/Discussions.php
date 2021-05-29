<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussionsOperation;

final class Discussions
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionsOperation
    {
        return new ListDiscussionsOperation($accept, $team_id, $direction, $per_page, $page);
    }

    function post(string $accept = 'application/vnd.github.echo-preview+json', $team_id): CreateDiscussionOperation
    {
        return new CreateDiscussionOperation($accept, $team_id);
    }
}
