<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Scim
{
    public function listProvisionedIdentities_($org, $startIndex, $count, $filter) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentities_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentities_($org, $startIndex, $count, $filter);
    }
    public function provisionAndInviteUser_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUser_($org);
    }
    public function getProvisioningInformationForUser_($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\GetProvisioningInformationForUser_($org, $scim_user_id);
    }
    public function setInformationForProvisionedUser_($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\SetInformationForProvisionedUser_($org, $scim_user_id);
    }
    public function deleteUserFromOrg_($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\DeleteUserFromOrg_($org, $scim_user_id);
    }
    public function updateAttributeForUser_($org, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\UpdateAttributeForUser_($org, $scim_user_id);
    }
}
