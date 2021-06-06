<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

final class CbPullNumberRcb
{
    function get($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get($owner, $repo, $pull_number);
    }
    function patch($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update($owner, $repo, $pull_number);
    }
}
