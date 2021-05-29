<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Members;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\CheckMembershipForUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\RemoveMemberOperation;

final class CbUsernameRcb
{
    function get($org, $username): CheckMembershipForUserOperation
    {
        return new CheckMembershipForUserOperation($org, $username);
    }

    function delete($org, $username): RemoveMemberOperation
    {
        return new RemoveMemberOperation($org, $username);
    }
}
