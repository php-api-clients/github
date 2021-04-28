<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships;

final class CbUsernameRcb
{
    function get($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetMembershipForUserInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetMembershipForUserInOrgOperation($org, $team_slug, $username);
    }
    function put($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateMembershipForUserInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateMembershipForUserInOrgOperation($org, $team_slug, $username);
    }
    function delete($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveMembershipForUserInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveMembershipForUserInOrgOperation($org, $team_slug, $username);
    }
}
