<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Environments;

final class CbEnvironmentNameRcb
{
    function get($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetEnvironmentOperation($owner, $repo, $environment_name);
    }
    function put($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateOrUpdateEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateOrUpdateEnvironmentOperation($owner, $repo, $environment_name);
    }
    function delete($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteAnEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteAnEnvironmentOperation($owner, $repo, $environment_name);
    }
}
