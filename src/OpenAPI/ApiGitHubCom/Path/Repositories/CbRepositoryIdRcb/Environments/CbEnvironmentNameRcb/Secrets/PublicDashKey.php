<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

final class PublicDashKey
{
    function get($repository_id, $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKeyOperation($repository_id, $environment_name);
    }
}
