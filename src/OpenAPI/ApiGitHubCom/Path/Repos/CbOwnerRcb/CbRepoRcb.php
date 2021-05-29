<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Delete;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Get;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Update;

final class CbRepoRcb
{
    function get($owner, $repo): Get
    {
        return new Get($owner, $repo);
    }

    function delete($owner, $repo): Delete
    {
        return new Delete($owner, $repo);
    }

    function patch($owner, $repo): Update
    {
        return new Update($owner, $repo);
    }
}
