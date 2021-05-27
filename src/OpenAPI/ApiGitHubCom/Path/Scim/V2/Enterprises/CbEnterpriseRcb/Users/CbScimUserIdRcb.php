<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb\Users;

final class CbScimUserIdRcb
{
    function get($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseUserOperation($enterprise, $scim_user_id);
    }
    function put($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUserOperation($enterprise, $scim_user_id);
    }
    function delete($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteUserFromEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteUserFromEnterpriseOperation($enterprise, $scim_user_id);
    }
    function patch($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseUserOperation($enterprise, $scim_user_id);
    }
}
