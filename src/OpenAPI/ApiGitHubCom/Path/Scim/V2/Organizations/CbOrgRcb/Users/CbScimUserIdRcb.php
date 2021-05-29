<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Organizations\CbOrgRcb\Users;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUserOperation;

final class CbScimUserIdRcb
{
    function get($org, $scim_user_id): GetProvisioningInformationForUserOperation
    {
        return new GetProvisioningInformationForUserOperation($org, $scim_user_id);
    }

    function put($org, $scim_user_id): SetInformationForProvisionedUserOperation
    {
        return new SetInformationForProvisionedUserOperation($org, $scim_user_id);
    }

    function delete($org, $scim_user_id): DeleteUserFromOrgOperation
    {
        return new DeleteUserFromOrgOperation($org, $scim_user_id);
    }

    function patch($org, $scim_user_id): UpdateAttributeForUserOperation
    {
        return new UpdateAttributeForUserOperation($org, $scim_user_id);
    }
}
