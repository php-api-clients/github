<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

final class Public-Key
{
    function get($repository_id, $environment_name) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetEnvironmentPublicKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetEnvironmentPublicKeyOperation($repository_id, $environment_name);
    }
}
