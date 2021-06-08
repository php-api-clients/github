<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Memberships;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser;

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
