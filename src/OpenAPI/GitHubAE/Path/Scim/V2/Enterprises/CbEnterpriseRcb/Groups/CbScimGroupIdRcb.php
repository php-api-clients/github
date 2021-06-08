<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Scim\V2\Enterprises\CbEnterpriseRcb\Groups;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroup;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroup;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroup;

final class CbScimGroupIdRcb
{
    function get($enterprise, $scim_group_id, $excludedAttributes): GetProvisioningInformationForEnterpriseGroup
    {
        return new GetProvisioningInformationForEnterpriseGroup($enterprise, $scim_group_id, $excludedAttributes);
    }

    function put($enterprise, $scim_group_id): SetInformationForProvisionedEnterpriseGroup
    {
        return new SetInformationForProvisionedEnterpriseGroup($enterprise, $scim_group_id);
    }

    function delete($enterprise, $scim_group_id): DeleteScimGroupFromEnterprise
    {
        return new DeleteScimGroupFromEnterprise($enterprise, $scim_group_id);
    }

    function patch($enterprise, $scim_group_id): UpdateAttributeForEnterpriseGroup
    {
        return new UpdateAttributeForEnterpriseGroup($enterprise, $scim_group_id);
    }
}
