<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacyOperation;

final class Discussions
{
    function get($team_id, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionsLegacyOperation
    {
        return new ListDiscussionsLegacyOperation($team_id, $direction, $per_page, $page);
    }

    function post($team_id): CreateDiscussionLegacyOperation
    {
        return new CreateDiscussionLegacyOperation($team_id);
    }
}
