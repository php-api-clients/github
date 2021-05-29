<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb\Members;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\AddMemberLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetMemberLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\RemoveMemberLegacyOperation;

final class CbUsernameRcb
{
    function get($team_id, $username): GetMemberLegacyOperation
    {
        return new GetMemberLegacyOperation($team_id, $username);
    }

    function put($team_id, $username): AddMemberLegacyOperation
    {
        return new AddMemberLegacyOperation($team_id, $username);
    }

    function delete($team_id, $username): RemoveMemberLegacyOperation
    {
        return new RemoveMemberLegacyOperation($team_id, $username);
    }
}
