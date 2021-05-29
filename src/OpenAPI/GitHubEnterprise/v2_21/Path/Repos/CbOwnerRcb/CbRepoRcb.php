<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\DeleteOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\UpdateOperation;

final class CbRepoRcb
{
    function get($owner, $repo): GetOperation
    {
        return new GetOperation($owner, $repo);
    }

    function delete($owner, $repo): DeleteOperation
    {
        return new DeleteOperation($owner, $repo);
    }

    function patch($owner, $repo): UpdateOperation
    {
        return new UpdateOperation($owner, $repo);
    }
}
