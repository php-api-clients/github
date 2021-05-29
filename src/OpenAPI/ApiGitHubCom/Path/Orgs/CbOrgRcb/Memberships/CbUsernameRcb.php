<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUserOperation;

final class CbUsernameRcb
{
    function get($org, $username): GetMembershipForUserOperation
    {
        return new GetMembershipForUserOperation($org, $username);
    }

    function put($org, $username): SetMembershipForUserOperation
    {
        return new SetMembershipForUserOperation($org, $username);
    }

    function delete($org, $username): RemoveMembershipForUserOperation
    {
        return new RemoveMembershipForUserOperation($org, $username);
    }
}
