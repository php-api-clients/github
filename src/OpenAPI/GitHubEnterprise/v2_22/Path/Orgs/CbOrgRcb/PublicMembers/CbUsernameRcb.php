<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\PublicMembers;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\CheckPublicMembershipForUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\RemovePublicMembershipForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\SetPublicMembershipForAuthenticatedUserOperation;

final class CbUsernameRcb
{
    function get($org, $username): CheckPublicMembershipForUserOperation
    {
        return new CheckPublicMembershipForUserOperation($org, $username);
    }

    function put($org, $username): SetPublicMembershipForAuthenticatedUserOperation
    {
        return new SetPublicMembershipForAuthenticatedUserOperation($org, $username);
    }

    function delete($org, $username): RemovePublicMembershipForAuthenticatedUserOperation
    {
        return new RemovePublicMembershipForAuthenticatedUserOperation($org, $username);
    }
}
