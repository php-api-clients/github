<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelectedRepoToOrgSecretOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelectedRepoFromOrgSecretOperation;

final class CbRepositoryIdRcb
{
    function put($org, $secret_name, $repository_id): AddSelectedRepoToOrgSecretOperation
    {
        return new AddSelectedRepoToOrgSecretOperation($org, $secret_name, $repository_id);
    }

    function delete($org, $secret_name, $repository_id): RemoveSelectedRepoFromOrgSecretOperation
    {
        return new RemoveSelectedRepoFromOrgSecretOperation($org, $secret_name, $repository_id);
    }
}
