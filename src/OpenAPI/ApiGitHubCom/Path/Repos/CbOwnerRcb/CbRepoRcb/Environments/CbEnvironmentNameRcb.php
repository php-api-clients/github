<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Repos\CbOwnerRcb\CbRepoRcb\Environments;

final class CbEnvironmentNameRcb
{
    function get($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironmentOperation($owner, $repo, $environment_name);
    }
    function put($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironmentOperation($owner, $repo, $environment_name);
    }
    function delete($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironmentOperation($owner, $repo, $environment_name);
    }
}
