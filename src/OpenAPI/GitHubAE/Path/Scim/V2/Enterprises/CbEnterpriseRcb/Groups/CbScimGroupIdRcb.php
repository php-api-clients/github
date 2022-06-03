<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Scim\V2\Enterprises\CbEnterpriseRcb\Groups;

final class CbScimGroupIdRcb
{
    function get($enterprise, $scim_group_id, $excludedAttributes) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroup
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroup($enterprise, $scim_group_id, $excludedAttributes);
    }
    function put($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroup
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroup($enterprise, $scim_group_id);
    }
    function delete($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterprise($enterprise, $scim_group_id);
    }
    function patch($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroup
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroup($enterprise, $scim_group_id);
    }
}
