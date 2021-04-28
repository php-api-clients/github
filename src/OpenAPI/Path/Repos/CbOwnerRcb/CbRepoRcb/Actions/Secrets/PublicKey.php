<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

final class PublicKey
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetRepoPublicKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetRepoPublicKeyOperation($owner, $repo);
    }
}
