<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthorsOperation;

final class Authors
{
    function get($owner, $repo, $since): GetCommitAuthorsOperation
    {
        return new GetCommitAuthorsOperation($owner, $repo, $since);
    }
}
