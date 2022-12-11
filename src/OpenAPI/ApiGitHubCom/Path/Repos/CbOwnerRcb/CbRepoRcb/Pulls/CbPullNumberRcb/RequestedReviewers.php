<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class RequestedReviewers
{
    function get($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers($owner, $repo, $pull_number);
    }
    function post($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers($owner, $repo, $pull_number);
    }
    function delete($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers($owner, $repo, $pull_number);
    }
}
