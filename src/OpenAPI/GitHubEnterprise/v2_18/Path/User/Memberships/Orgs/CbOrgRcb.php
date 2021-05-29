<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User\Memberships\Orgs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\GetMembershipForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\UpdateMembershipForAuthenticatedUser;

final class CbOrgRcb
{
    function get($org): GetMembershipForAuthenticatedUser
    {
        return new GetMembershipForAuthenticatedUser($org);
    }

    function patch($org): UpdateMembershipForAuthenticatedUser
    {
        return new UpdateMembershipForAuthenticatedUser($org);
    }
}
