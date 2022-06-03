<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

final class PublicKey
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoPublicKey($owner, $repo);
    }
}
