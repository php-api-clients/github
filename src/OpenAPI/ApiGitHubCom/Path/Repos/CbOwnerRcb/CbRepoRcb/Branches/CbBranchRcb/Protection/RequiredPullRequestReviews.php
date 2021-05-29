<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtectionOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtectionOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtectionOperation;

final class RequiredPullRequestReviews
{
    function get($owner, $repo, $branch): GetPullRequestReviewProtectionOperation
    {
        return new GetPullRequestReviewProtectionOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeletePullRequestReviewProtectionOperation
    {
        return new DeletePullRequestReviewProtectionOperation($owner, $repo, $branch);
    }

    function patch($owner, $repo, $branch): UpdatePullRequestReviewProtectionOperation
    {
        return new UpdatePullRequestReviewProtectionOperation($owner, $repo, $branch);
    }
}
