<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetOperation($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteOperation($owner, $repo);
    }
    function patch($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateOperation($owner, $repo);
    }
}
