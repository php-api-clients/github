<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Scim\V2\Organizations\CbOrgRcb\Users;

final class CbScimUserIdRcb
{
    function get($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUserOperation($org, $scim_user_id);
    }
    function put($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUserOperation($org, $scim_user_id);
    }
    function delete($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrgOperation($org, $scim_user_id);
    }
    function patch($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUserOperation($org, $scim_user_id);
    }
}
