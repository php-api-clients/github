<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret;

final class Repositories
{
    function get($org, $secret_name, int $page = 1, int $per_page = 30): ListSelectedReposForOrgSecret
    {
        return new ListSelectedReposForOrgSecret($org, $secret_name, $page, $per_page);
    }

    function put($org, $secret_name): SetSelectedReposForOrgSecret
    {
        return new SetSelectedReposForOrgSecret($org, $secret_name);
    }
}
