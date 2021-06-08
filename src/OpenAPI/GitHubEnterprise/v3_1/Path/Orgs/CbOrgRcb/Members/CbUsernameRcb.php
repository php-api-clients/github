<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Members;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\CheckMembershipForUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\RemoveMember;

final class CbUsernameRcb
{
    function get($org, $username): CheckMembershipForUser
    {
        return new CheckMembershipForUser($org, $username);
    }

    function delete($org, $username): RemoveMember
    {
        return new RemoveMember($org, $username);
    }
}
