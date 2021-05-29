<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\PublicMembers;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckPublicMembershipForUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemovePublicMembershipForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetPublicMembershipForAuthenticatedUserOperation;

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
