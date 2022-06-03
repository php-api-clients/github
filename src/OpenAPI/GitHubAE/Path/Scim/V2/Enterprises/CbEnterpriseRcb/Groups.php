<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

final class Groups
{
    function get($enterprise, $startIndex, $count, $filter, $excludedAttributes) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterprise($enterprise, $startIndex, $count, $filter, $excludedAttributes);
    }
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroup
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroup($enterprise);
    }
}
