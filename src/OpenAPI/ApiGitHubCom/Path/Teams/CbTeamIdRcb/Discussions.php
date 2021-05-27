<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb;

final class Discussions
{
    function get($team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacyOperation($team_id, $direction, $per_page, $page);
    }
    function post($team_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacyOperation($team_id);
    }
}
