<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateRepoSecretOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteRepoSecretOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoSecretOperation;

final class CbSecretNameRcb
{
    function get($owner, $repo, $secret_name): GetRepoSecretOperation
    {
        return new GetRepoSecretOperation($owner, $repo, $secret_name);
    }

    function put($owner, $repo, $secret_name): CreateOrUpdateRepoSecretOperation
    {
        return new CreateOrUpdateRepoSecretOperation($owner, $repo, $secret_name);
    }

    function delete($owner, $repo, $secret_name): DeleteRepoSecretOperation
    {
        return new DeleteRepoSecretOperation($owner, $repo, $secret_name);
    }
}
