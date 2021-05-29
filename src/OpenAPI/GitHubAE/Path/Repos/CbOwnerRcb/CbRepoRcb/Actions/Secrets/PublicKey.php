<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoPublicKeyOperation;

final class PublicKey
{
    function get($owner, $repo): GetRepoPublicKeyOperation
    {
        return new GetRepoPublicKeyOperation($owner, $repo);
    }
}
