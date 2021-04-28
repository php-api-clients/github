<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Trees
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateTreeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateTreeOperation($owner, $repo);
    }
}
