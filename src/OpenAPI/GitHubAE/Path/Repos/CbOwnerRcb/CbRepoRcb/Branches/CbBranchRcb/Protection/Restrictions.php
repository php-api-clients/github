<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAccessRestrictionsOperation;

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
