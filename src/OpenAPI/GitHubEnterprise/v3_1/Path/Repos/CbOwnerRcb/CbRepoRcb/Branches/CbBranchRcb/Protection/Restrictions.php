<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAccessRestrictions;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAccessRestrictions;

final class Restrictions
{
    function get($owner, $repo, $branch): GetAccessRestrictions
    {
        return new GetAccessRestrictions($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteAccessRestrictions
    {
        return new DeleteAccessRestrictions($owner, $repo, $branch);
    }
}