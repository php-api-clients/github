<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetStatusChecksProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveStatusCheckProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateStatusCheckProtection;

final class RequiredStatusChecks
{
    function get($owner, $repo, $branch): GetStatusChecksProtection
    {
        return new GetStatusChecksProtection($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveStatusCheckProtection
    {
        return new RemoveStatusCheckProtection($owner, $repo, $branch);
    }

    function patch($owner, $repo, $branch): UpdateStatusCheckProtection
    {
        return new UpdateStatusCheckProtection($owner, $repo, $branch);
    }
}
