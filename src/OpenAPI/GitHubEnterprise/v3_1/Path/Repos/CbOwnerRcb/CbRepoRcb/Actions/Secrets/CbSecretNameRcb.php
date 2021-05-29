<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateRepoSecret;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteRepoSecret;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoSecret;

final class CbSecretNameRcb
{
    function get($owner, $repo, $secret_name): GetRepoSecret
    {
        return new GetRepoSecret($owner, $repo, $secret_name);
    }

    function put($owner, $repo, $secret_name): CreateOrUpdateRepoSecret
    {
        return new CreateOrUpdateRepoSecret($owner, $repo, $secret_name);
    }

    function delete($owner, $repo, $secret_name): DeleteRepoSecret
    {
        return new DeleteRepoSecret($owner, $repo, $secret_name);
    }
}
