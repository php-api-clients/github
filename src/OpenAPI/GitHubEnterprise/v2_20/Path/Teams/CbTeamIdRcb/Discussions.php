<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\CreateDiscussion;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\ListDiscussions;

final class Discussions
{
    function get($team_id, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussions
    {
        return new ListDiscussions($team_id, $direction, $per_page, $page);
    }

    function post($team_id): CreateDiscussion
    {
        return new CreateDiscussion($team_id);
    }
}
