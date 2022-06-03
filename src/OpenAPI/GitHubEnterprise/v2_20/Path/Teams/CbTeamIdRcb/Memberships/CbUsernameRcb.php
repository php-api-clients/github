<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Memberships;

final class CbUsernameRcb
{
    function get($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\GetMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\GetMembershipForUser($team_id, $username);
    }
    function put($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\AddOrUpdateMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\AddOrUpdateMembershipForUser($team_id, $username);
    }
    function delete($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\RemoveMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\RemoveMembershipForUser($team_id, $username);
    }
}
