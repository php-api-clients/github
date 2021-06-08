<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\PublicMembers;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\CheckPublicMembershipForUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\SetPublicMembershipForAuthenticatedUser;

final class CbUsernameRcb
{
    function get($org, $username): CheckPublicMembershipForUser
    {
        return new CheckPublicMembershipForUser($org, $username);
    }

    function put($org, $username): SetPublicMembershipForAuthenticatedUser
    {
        return new SetPublicMembershipForAuthenticatedUser($org, $username);
    }

    function delete($org, $username): RemovePublicMembershipForAuthenticatedUser
    {
        return new RemovePublicMembershipForAuthenticatedUser($org, $username);
    }
}
