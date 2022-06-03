<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

final class CbPullNumberRcb
{
    function get($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\Get($owner, $repo, $pull_number);
    }
    function patch($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\Update($owner, $repo, $pull_number);
    }
}
