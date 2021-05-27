<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb;

final class Discussions
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussionsOperation($accept, $team_id, $direction, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.echo-preview+json', $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussionOperation($accept, $team_id);
    }
}
