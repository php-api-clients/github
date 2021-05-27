<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Enterprises\CbEnterpriseRcb;

final class Users
{
    function get($enterprise, $startIndex, $count, $filter) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterpriseOperation($enterprise, $startIndex, $count, $filter);
    }
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUserOperation($enterprise);
    }
}
