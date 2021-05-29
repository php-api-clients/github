<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterprise;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroup;

final class Groups
{
    function get($enterprise, $startIndex, $count, $filter, $excludedAttributes): ListProvisionedGroupsEnterprise
    {
        return new ListProvisionedGroupsEnterprise($enterprise, $startIndex, $count, $filter, $excludedAttributes);
    }

    function post($enterprise): ProvisionAndInviteEnterpriseGroup
    {
        return new ProvisionAndInviteEnterpriseGroup($enterprise);
    }
}
