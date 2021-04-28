<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

final class CbRefRcb
{
    function delete($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\Git\DeleteRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\DeleteRefOperation($owner, $repo, $ref);
    }
    function patch($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\Git\UpdateRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\UpdateRefOperation($owner, $repo, $ref);
    }
}
