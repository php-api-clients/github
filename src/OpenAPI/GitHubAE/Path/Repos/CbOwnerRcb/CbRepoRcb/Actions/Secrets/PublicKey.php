<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoPublicKey;

final class PublicKey
{
    function get($owner, $repo): GetRepoPublicKey
    {
        return new GetRepoPublicKey($owner, $repo);
    }
}
