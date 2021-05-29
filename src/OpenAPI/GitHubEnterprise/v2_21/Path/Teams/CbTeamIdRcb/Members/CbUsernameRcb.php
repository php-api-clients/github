<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Teams\CbTeamIdRcb\Members;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\AddMemberLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\GetMemberLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\RemoveMemberLegacy;

final class CbUsernameRcb
{
    function get($team_id, $username): GetMemberLegacy
    {
        return new GetMemberLegacy($team_id, $username);
    }

    function put($team_id, $username): AddMemberLegacy
    {
        return new AddMemberLegacy($team_id, $username);
    }

    function delete($team_id, $username): RemoveMemberLegacy
    {
        return new RemoveMemberLegacy($team_id, $username);
    }
}
