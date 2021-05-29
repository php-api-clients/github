<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb\Users;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteUserFromEnterprise;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseUser;

final class CbScimUserIdRcb
{
    function get($enterprise, $scim_user_id): GetProvisioningInformationForEnterpriseUser
    {
        return new GetProvisioningInformationForEnterpriseUser($enterprise, $scim_user_id);
    }

    function put($enterprise, $scim_user_id): SetInformationForProvisionedEnterpriseUser
    {
        return new SetInformationForProvisionedEnterpriseUser($enterprise, $scim_user_id);
    }

    function delete($enterprise, $scim_user_id): DeleteUserFromEnterprise
    {
        return new DeleteUserFromEnterprise($enterprise, $scim_user_id);
    }

    function patch($enterprise, $scim_user_id): UpdateAttributeForEnterpriseUser
    {
        return new UpdateAttributeForEnterpriseUser($enterprise, $scim_user_id);
    }
}
