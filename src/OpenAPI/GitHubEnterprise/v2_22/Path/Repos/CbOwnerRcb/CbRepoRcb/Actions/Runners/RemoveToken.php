<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateRemoveTokenForRepoOperation;

final class RemoveToken
{
    function post($owner, $repo): CreateRemoveTokenForRepoOperation
    {
        return new CreateRemoveTokenForRepoOperation($owner, $repo);
    }
}
