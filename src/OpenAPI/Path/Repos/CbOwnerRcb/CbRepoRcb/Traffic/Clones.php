<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Traffic;

final class Clones
{
    function get($owner, $repo, string $per = 'day') : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetClonesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetClonesOperation($owner, $repo, $per);
    }
}
