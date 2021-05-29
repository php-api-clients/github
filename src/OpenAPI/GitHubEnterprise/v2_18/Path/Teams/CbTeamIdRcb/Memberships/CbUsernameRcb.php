<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateMembershipForUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetMembershipForUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveMembershipForUserOperation;

final class CbUsernameRcb
{
    function get($team_id, $username): GetMembershipForUserOperation
    {
        return new GetMembershipForUserOperation($team_id, $username);
    }

    function put($team_id, $username): AddOrUpdateMembershipForUserOperation
    {
        return new AddOrUpdateMembershipForUserOperation($team_id, $username);
    }

    function delete($team_id, $username): RemoveMembershipForUserOperation
    {
        return new RemoveMembershipForUserOperation($team_id, $username);
    }
}
