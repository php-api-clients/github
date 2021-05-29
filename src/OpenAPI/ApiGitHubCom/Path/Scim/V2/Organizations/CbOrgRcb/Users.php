<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Organizations\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentities;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUser;

final class Users
{
    function get($org, $startIndex, $count, $filter): ListProvisionedIdentities
    {
        return new ListProvisionedIdentities($org, $startIndex, $count, $filter);
    }

    function post($org): ProvisionAndInviteUser
    {
        return new ProvisionAndInviteUser($org);
    }
}
