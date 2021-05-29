<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\DeletePullRequestReviewProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetPullRequestReviewProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\UpdatePullRequestReviewProtection;

final class RequiredPullRequestReviews
{
    function get($owner, $repo, $branch): GetPullRequestReviewProtection
    {
        return new GetPullRequestReviewProtection($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeletePullRequestReviewProtection
    {
        return new DeletePullRequestReviewProtection($owner, $repo, $branch);
    }

    function patch($owner, $repo, $branch): UpdatePullRequestReviewProtection
    {
        return new UpdatePullRequestReviewProtection($owner, $repo, $branch);
    }
}
