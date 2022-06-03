<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb;

final class Discussions
{
    function get($team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsLegacy($team_id, $direction, $per_page, $page);
    }
    function post($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionLegacy($team_id);
    }
}
