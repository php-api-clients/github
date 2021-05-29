<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update;

final class CbPullNumberRcb
{
    function get($owner, $repo, $pull_number): Get
    {
        return new Get($owner, $repo, $pull_number);
    }

    function patch($owner, $repo, $pull_number): Update
    {
        return new Update($owner, $repo, $pull_number);
    }
}
