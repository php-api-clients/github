<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

final class CbSecretNameRcb
{
    function get($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecretOperation($owner, $repo, $secret_name);
    }
    function put($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecretOperation($owner, $repo, $secret_name);
    }
    function delete($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecretOperation($owner, $repo, $secret_name);
    }
}
