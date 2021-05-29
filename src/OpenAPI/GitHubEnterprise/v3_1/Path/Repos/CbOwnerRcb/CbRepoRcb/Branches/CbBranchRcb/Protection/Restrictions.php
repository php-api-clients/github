<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAccessRestrictionsOperation;

final class Restrictions
{
    function get($owner, $repo, $branch): GetAccessRestrictionsOperation
    {
        return new GetAccessRestrictionsOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteAccessRestrictionsOperation
    {
        return new DeleteAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
