<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Enterprises\CbEnterpriseRcb\Actions;

final class Permissions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterpriseOperation($enterprise);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterpriseOperation($enterprise);
    }
}
