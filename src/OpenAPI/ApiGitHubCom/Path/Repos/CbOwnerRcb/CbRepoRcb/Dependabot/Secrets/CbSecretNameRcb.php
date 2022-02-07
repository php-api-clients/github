<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets;

final class CbSecretNameRcb
{
    function get($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret($owner, $repo, $secret_name);
    }
    function put($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret($owner, $repo, $secret_name);
    }
    function delete($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret($owner, $repo, $secret_name);
    }
}
