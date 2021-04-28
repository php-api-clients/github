<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb;

final class Secrets
{
    function get($repository_id, $environment_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListEnvironmentSecretsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListEnvironmentSecretsOperation($repository_id, $environment_name, $per_page, $page);
    }
}
