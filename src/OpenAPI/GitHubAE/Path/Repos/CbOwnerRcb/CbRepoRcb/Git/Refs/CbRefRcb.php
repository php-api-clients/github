<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRefOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRefOperation;

final class CbRefRcb
{
    function delete($owner, $repo, $ref): DeleteRefOperation
    {
        return new DeleteRefOperation($owner, $repo, $ref);
    }

    function patch($owner, $repo, $ref): UpdateRefOperation
    {
        return new UpdateRefOperation($owner, $repo, $ref);
    }
}
