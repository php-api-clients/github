<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\DeleteRef;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\UpdateRef;

final class CbRefRcb
{
    function delete($owner, $repo, $ref): DeleteRef
    {
        return new DeleteRef($owner, $repo, $ref);
    }

    function patch($owner, $repo, $ref): UpdateRef
    {
        return new UpdateRef($owner, $repo, $ref);
    }
}
