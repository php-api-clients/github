<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserInOrg;

final class CbUsernameRcb
{
    function get($org, $team_slug, $username): GetMembershipForUserInOrg
    {
        return new GetMembershipForUserInOrg($org, $team_slug, $username);
    }

    function put($org, $team_slug, $username): AddOrUpdateMembershipForUserInOrg
    {
        return new AddOrUpdateMembershipForUserInOrg($org, $team_slug, $username);
    }

    function delete($org, $team_slug, $username): RemoveMembershipForUserInOrg
    {
        return new RemoveMembershipForUserInOrg($org, $team_slug, $username);
    }
}
