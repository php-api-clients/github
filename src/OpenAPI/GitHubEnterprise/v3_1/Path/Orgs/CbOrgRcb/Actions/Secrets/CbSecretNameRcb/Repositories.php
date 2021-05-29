<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedReposForOrgSecretOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedReposForOrgSecretOperation;

final class Repositories
{
    function get($org, $secret_name, int $page = 1, int $per_page = 30): ListSelectedReposForOrgSecretOperation
    {
        return new ListSelectedReposForOrgSecretOperation($org, $secret_name, $page, $per_page);
    }

    function put($org, $secret_name): SetSelectedReposForOrgSecretOperation
    {
        return new SetSelectedReposForOrgSecretOperation($org, $secret_name);
    }
}
