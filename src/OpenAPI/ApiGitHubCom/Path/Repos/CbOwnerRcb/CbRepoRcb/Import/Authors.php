<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors;

final class Authors
{
    function get($owner, $repo, $since): GetCommitAuthors
    {
        return new GetCommitAuthors($owner, $repo, $since);
    }
}
