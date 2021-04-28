<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class RemoveToken
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRemoveTokenForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRemoveTokenForRepoOperation($owner, $repo);
    }
}
