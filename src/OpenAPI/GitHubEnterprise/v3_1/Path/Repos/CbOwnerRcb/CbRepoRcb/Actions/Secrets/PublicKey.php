<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

final class PublicKey
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoPublicKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoPublicKeyOperation($owner, $repo);
    }
}
