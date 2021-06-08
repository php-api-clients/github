<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey;

final class PublicKey
{
    function get($owner, $repo): GetRepoPublicKey
    {
        return new GetRepoPublicKey($owner, $repo);
    }
}
