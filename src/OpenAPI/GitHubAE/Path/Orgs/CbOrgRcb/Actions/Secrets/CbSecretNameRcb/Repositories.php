<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb;

final class Repositories
{
    function get($org, $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedReposForOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedReposForOrgSecretOperation($org, $secret_name, $page, $per_page);
    }
    function put($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedReposForOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedReposForOrgSecretOperation($org, $secret_name);
    }
}
