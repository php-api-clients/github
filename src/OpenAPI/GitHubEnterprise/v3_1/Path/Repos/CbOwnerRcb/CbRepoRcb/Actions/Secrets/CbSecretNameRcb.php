<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

final class CbSecretNameRcb
{
    function get($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoSecret($owner, $repo, $secret_name);
    }
    function put($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateRepoSecret($owner, $repo, $secret_name);
    }
    function delete($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteRepoSecret($owner, $repo, $secret_name);
    }
}
