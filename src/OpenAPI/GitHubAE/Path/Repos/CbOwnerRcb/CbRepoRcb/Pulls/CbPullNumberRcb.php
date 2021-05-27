<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

final class CbPullNumberRcb
{
    function get($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetOperation($owner, $repo, $pull_number);
    }
    function patch($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateOperation($owner, $repo, $pull_number);
    }
}
