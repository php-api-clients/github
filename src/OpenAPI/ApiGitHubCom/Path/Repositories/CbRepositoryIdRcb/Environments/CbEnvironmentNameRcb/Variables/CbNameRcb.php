<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Variables;

final class CbNameRcb
{
    function get($repository_id, $environment_name, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentVariable($repository_id, $environment_name, $name);
    }
    function delete($repository_id, $name, $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentVariable($repository_id, $name, $environment_name);
    }
    function patch($repository_id, $name, $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateEnvironmentVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateEnvironmentVariable($repository_id, $name, $environment_name);
    }
}
