<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateMembershipForUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetMembershipForUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveMembershipForUser;

final class CbUsernameRcb
{
    function get($team_id, $username): GetMembershipForUser
    {
        return new GetMembershipForUser($team_id, $username);
    }

    function put($team_id, $username): AddOrUpdateMembershipForUser
    {
        return new AddOrUpdateMembershipForUser($team_id, $username);
    }

    function delete($team_id, $username): RemoveMembershipForUser
    {
        return new RemoveMembershipForUser($team_id, $username);
    }
}
