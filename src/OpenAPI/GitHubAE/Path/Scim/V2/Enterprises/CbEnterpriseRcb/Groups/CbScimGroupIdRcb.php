<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Scim\V2\Enterprises\CbEnterpriseRcb\Groups;

final class CbScimGroupIdRcb
{
    function get($enterprise, $scim_group_id, $excludedAttributes) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroupOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroupOperation($enterprise, $scim_group_id, $excludedAttributes);
    }
    function put($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroupOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroupOperation($enterprise, $scim_group_id);
    }
    function delete($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterpriseOperation($enterprise, $scim_group_id);
    }
    function patch($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroupOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroupOperation($enterprise, $scim_group_id);
    }
}
