<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUser;

final class Users
{
    function get($enterprise, $startIndex, $count, $filter): ListProvisionedIdentitiesEnterprise
    {
        return new ListProvisionedIdentitiesEnterprise($enterprise, $startIndex, $count, $filter);
    }

    function post($enterprise): ProvisionAndInviteEnterpriseUser
    {
        return new ProvisionAndInviteEnterpriseUser($enterprise);
    }
}
