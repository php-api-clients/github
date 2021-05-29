<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroupOperation;

final class Groups
{
    function get($enterprise, $startIndex, $count, $filter, $excludedAttributes): ListProvisionedGroupsEnterpriseOperation
    {
        return new ListProvisionedGroupsEnterpriseOperation($enterprise, $startIndex, $count, $filter, $excludedAttributes);
    }

    function post($enterprise): ProvisionAndInviteEnterpriseGroupOperation
    {
        return new ProvisionAndInviteEnterpriseGroupOperation($enterprise);
    }
}
