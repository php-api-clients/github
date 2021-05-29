<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsLegacy;

final class Discussions
{
    function get($team_id, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionsLegacy
    {
        return new ListDiscussionsLegacy($team_id, $direction, $per_page, $page);
    }

    function post($team_id): CreateDiscussionLegacy
    {
        return new CreateDiscussionLegacy($team_id);
    }
}
