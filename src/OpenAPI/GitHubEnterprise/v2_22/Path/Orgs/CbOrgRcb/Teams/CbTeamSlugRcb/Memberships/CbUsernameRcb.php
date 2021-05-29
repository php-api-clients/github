<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\AddOrUpdateMembershipForUserInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\GetMembershipForUserInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\RemoveMembershipForUserInOrgOperation;

final class CbUsernameRcb
{
    function get($org, $team_slug, $username): GetMembershipForUserInOrgOperation
    {
        return new GetMembershipForUserInOrgOperation($org, $team_slug, $username);
    }

    function put($org, $team_slug, $username): AddOrUpdateMembershipForUserInOrgOperation
    {
        return new AddOrUpdateMembershipForUserInOrgOperation($org, $team_slug, $username);
    }

    function delete($org, $team_slug, $username): RemoveMembershipForUserInOrgOperation
    {
        return new RemoveMembershipForUserInOrgOperation($org, $team_slug, $username);
    }
}
