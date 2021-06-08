<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\AddSelectedRepoToOrgSecret;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\RemoveSelectedRepoFromOrgSecret;

final class CbRepositoryIdRcb
{
    function put($org, $secret_name, $repository_id): AddSelectedRepoToOrgSecret
    {
        return new AddSelectedRepoToOrgSecret($org, $secret_name, $repository_id);
    }

    function delete($org, $secret_name, $repository_id): RemoveSelectedRepoFromOrgSecret
    {
        return new RemoveSelectedRepoFromOrgSecret($org, $secret_name, $repository_id);
    }
}
