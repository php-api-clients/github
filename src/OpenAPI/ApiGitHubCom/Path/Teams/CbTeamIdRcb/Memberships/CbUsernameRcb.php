<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserLegacy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserLegacy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserLegacy;

final class CbUsernameRcb
{
    function get($team_id, $username): GetMembershipForUserLegacy
    {
        return new GetMembershipForUserLegacy($team_id, $username);
    }

    function put($team_id, $username): AddOrUpdateMembershipForUserLegacy
    {
        return new AddOrUpdateMembershipForUserLegacy($team_id, $username);
    }

    function delete($team_id, $username): RemoveMembershipForUserLegacy
    {
        return new RemoveMembershipForUserLegacy($team_id, $username);
    }
}
