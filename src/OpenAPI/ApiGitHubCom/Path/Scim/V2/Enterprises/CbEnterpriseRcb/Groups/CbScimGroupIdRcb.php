<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb\Groups;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroupOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroupOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroupOperation;

final class CbScimGroupIdRcb
{
    function get($enterprise, $scim_group_id, $excludedAttributes): GetProvisioningInformationForEnterpriseGroupOperation
    {
        return new GetProvisioningInformationForEnterpriseGroupOperation($enterprise, $scim_group_id, $excludedAttributes);
    }

    function put($enterprise, $scim_group_id): SetInformationForProvisionedEnterpriseGroupOperation
    {
        return new SetInformationForProvisionedEnterpriseGroupOperation($enterprise, $scim_group_id);
    }

    function delete($enterprise, $scim_group_id): DeleteScimGroupFromEnterpriseOperation
    {
        return new DeleteScimGroupFromEnterpriseOperation($enterprise, $scim_group_id);
    }

    function patch($enterprise, $scim_group_id): UpdateAttributeForEnterpriseGroupOperation
    {
        return new UpdateAttributeForEnterpriseGroupOperation($enterprise, $scim_group_id);
    }
}
