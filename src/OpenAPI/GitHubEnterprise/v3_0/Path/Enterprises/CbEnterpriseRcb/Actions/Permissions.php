<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions;

final class Permissions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($enterprise);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($enterprise);
    }
}
