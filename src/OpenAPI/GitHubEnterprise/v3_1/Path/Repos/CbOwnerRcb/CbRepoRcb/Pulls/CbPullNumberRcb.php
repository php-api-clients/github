<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Get;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Update;

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
