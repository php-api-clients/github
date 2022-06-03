<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets;

final class CbSecretNameRcb
{
    function get($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret($owner, $repo, $secret_name);
    }
    function put($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret($owner, $repo, $secret_name);
    }
    function delete($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret($owner, $repo, $secret_name);
    }
}
