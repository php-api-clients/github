<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb;

final class Repositories
{
    function get($org, $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedReposForOrgSecret($org, $secret_name, $page, $per_page);
    }
    function put($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedReposForOrgSecret($org, $secret_name);
    }
}
