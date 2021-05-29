<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Memberships\Orgs;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateMembershipForAuthenticatedUserOperation;

final class CbOrgRcb
{
    function get($org): GetMembershipForAuthenticatedUserOperation
    {
        return new GetMembershipForAuthenticatedUserOperation($org);
    }

    function patch($org): UpdateMembershipForAuthenticatedUserOperation
    {
        return new UpdateMembershipForAuthenticatedUserOperation($org);
    }
}
