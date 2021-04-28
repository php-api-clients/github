<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Tags
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateTagOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateTagOperation($owner, $repo);
    }
}
