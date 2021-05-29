<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb\Users;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteUserFromEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseUserOperation;

final class CbScimUserIdRcb
{
    function get($enterprise, $scim_user_id): GetProvisioningInformationForEnterpriseUserOperation
    {
        return new GetProvisioningInformationForEnterpriseUserOperation($enterprise, $scim_user_id);
    }

    function put($enterprise, $scim_user_id): SetInformationForProvisionedEnterpriseUserOperation
    {
        return new SetInformationForProvisionedEnterpriseUserOperation($enterprise, $scim_user_id);
    }

    function delete($enterprise, $scim_user_id): DeleteUserFromEnterpriseOperation
    {
        return new DeleteUserFromEnterpriseOperation($enterprise, $scim_user_id);
    }

    function patch($enterprise, $scim_user_id): UpdateAttributeForEnterpriseUserOperation
    {
        return new UpdateAttributeForEnterpriseUserOperation($enterprise, $scim_user_id);
    }
}
