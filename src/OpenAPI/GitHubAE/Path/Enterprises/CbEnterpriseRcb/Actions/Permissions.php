<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions;

final class Permissions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($enterprise);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($enterprise);
    }
}
