<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUserOperation;

final class Users
{
    function get($enterprise, $startIndex, $count, $filter): ListProvisionedIdentitiesEnterpriseOperation
    {
        return new ListProvisionedIdentitiesEnterpriseOperation($enterprise, $startIndex, $count, $filter);
    }

    function post($enterprise): ProvisionAndInviteEnterpriseUserOperation
    {
        return new ProvisionAndInviteEnterpriseUserOperation($enterprise);
    }
}
