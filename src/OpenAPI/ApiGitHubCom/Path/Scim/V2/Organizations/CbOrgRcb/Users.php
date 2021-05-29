<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Organizations\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentitiesOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUserOperation;

final class Users
{
    function get($org, $startIndex, $count, $filter): ListProvisionedIdentitiesOperation
    {
        return new ListProvisionedIdentitiesOperation($org, $startIndex, $count, $filter);
    }

    function post($org): ProvisionAndInviteUserOperation
    {
        return new ProvisionAndInviteUserOperation($org);
    }
}
