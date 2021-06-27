<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

final class Users
{
    function get($enterprise, $startIndex, $count, $filter) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise($enterprise, $startIndex, $count, $filter);
    }
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUser($enterprise);
    }
}
