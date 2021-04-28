<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Readme
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReadmeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReadmeOperation($owner, $repo, $ref);
    }
}
