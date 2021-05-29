<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetStatusChecksProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\RemoveStatusCheckProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\UpdateStatusCheckProtectionOperation;

final class RequiredStatusChecks
{
    function get($owner, $repo, $branch): GetStatusChecksProtectionOperation
    {
        return new GetStatusChecksProtectionOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveStatusCheckProtectionOperation
    {
        return new RemoveStatusCheckProtectionOperation($owner, $repo, $branch);
    }

    function patch($owner, $repo, $branch): UpdateStatusCheckProtectionOperation
    {
        return new UpdateStatusCheckProtectionOperation($owner, $repo, $branch);
    }
}
