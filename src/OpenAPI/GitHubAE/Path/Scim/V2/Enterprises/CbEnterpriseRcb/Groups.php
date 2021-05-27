<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

final class Groups
{
    function get($enterprise, $startIndex, $count, $filter, $excludedAttributes) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterpriseOperation($enterprise, $startIndex, $count, $filter, $excludedAttributes);
    }
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroupOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroupOperation($enterprise);
    }
}
