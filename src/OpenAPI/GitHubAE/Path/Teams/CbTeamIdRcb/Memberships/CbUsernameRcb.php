<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserLegacyOperation;

final class CbUsernameRcb
{
    function get($team_id, $username): GetMembershipForUserLegacyOperation
    {
        return new GetMembershipForUserLegacyOperation($team_id, $username);
    }

    function put($team_id, $username): AddOrUpdateMembershipForUserLegacyOperation
    {
        return new AddOrUpdateMembershipForUserLegacyOperation($team_id, $username);
    }

    function delete($team_id, $username): RemoveMembershipForUserLegacyOperation
    {
        return new RemoveMembershipForUserLegacyOperation($team_id, $username);
    }
}
