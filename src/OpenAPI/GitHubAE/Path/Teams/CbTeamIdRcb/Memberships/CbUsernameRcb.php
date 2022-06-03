<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Memberships;

final class CbUsernameRcb
{
    function get($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserLegacy($team_id, $username);
    }
    function put($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserLegacy($team_id, $username);
    }
    function delete($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserLegacy($team_id, $username);
    }
}
