<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Refs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateRefOperation($owner, $repo);
    }
}
