<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class RequiredPullRequestReviews
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtection($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtection($owner, $repo, $branch);
    }
    function patch($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtection($owner, $repo, $branch);
    }
}
