<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path\\Users\CbUsernameRcb;

final class SiteAdmin
{
    function put($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministratorOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\DemoteSiteAdministratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\DemoteSiteAdministratorOperation($username);
    }
}
