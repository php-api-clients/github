<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class RequiredPullRequestReviews
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetPullRequestReviewProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetPullRequestReviewProtectionOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeletePullRequestReviewProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeletePullRequestReviewProtectionOperation($owner, $repo, $branch);
    }
    function patch($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdatePullRequestReviewProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdatePullRequestReviewProtectionOperation($owner, $repo, $branch);
    }
}
