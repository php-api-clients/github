<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Organizations\CbOrgRcb\Users;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUser;

final class CbScimUserIdRcb
{
    function get($org, $scim_user_id): GetProvisioningInformationForUser
    {
        return new GetProvisioningInformationForUser($org, $scim_user_id);
    }

    function put($org, $scim_user_id): SetInformationForProvisionedUser
    {
        return new SetInformationForProvisionedUser($org, $scim_user_id);
    }

    function delete($org, $scim_user_id): DeleteUserFromOrg
    {
        return new DeleteUserFromOrg($org, $scim_user_id);
    }

    function patch($org, $scim_user_id): UpdateAttributeForUser
    {
        return new UpdateAttributeForUser($org, $scim_user_id);
    }
}
