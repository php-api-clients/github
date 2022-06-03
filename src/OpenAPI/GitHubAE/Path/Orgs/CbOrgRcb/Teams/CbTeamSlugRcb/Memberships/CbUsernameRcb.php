<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships;

final class CbUsernameRcb
{
    function get($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserInOrg($org, $team_slug, $username);
    }
    function put($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserInOrg($org, $team_slug, $username);
    }
    function delete($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserInOrg($org, $team_slug, $username);
    }
}
