<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Organizations\CbOrgRcb\Users;

final class CbScimUserIdRcb
{
    function get($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUser($org, $scim_user_id);
    }
    function put($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUser($org, $scim_user_id);
    }
    function delete($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrg($org, $scim_user_id);
    }
    function patch($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUser($org, $scim_user_id);
    }
}
