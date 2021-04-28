<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Traffic;

final class Views
{
    function get($owner, $repo, string $per = 'day') : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetViewsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetViewsOperation($owner, $repo, $per);
    }
}
