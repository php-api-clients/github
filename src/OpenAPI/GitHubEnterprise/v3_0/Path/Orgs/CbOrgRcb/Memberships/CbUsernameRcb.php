<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetMembershipForUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveMembershipForUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\SetMembershipForUser;

final class CbUsernameRcb
{
    function get($org, $username): GetMembershipForUser
    {
        return new GetMembershipForUser($org, $username);
    }

    function put($org, $username): SetMembershipForUser
    {
        return new SetMembershipForUser($org, $username);
    }

    function delete($org, $username): RemoveMembershipForUser
    {
        return new RemoveMembershipForUser($org, $username);
    }
}
