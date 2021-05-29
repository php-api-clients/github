<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthorOperation;

final class CbAuthorIdRcb
{
    function patch($owner, $repo, $author_id): MapCommitAuthorOperation
    {
        return new MapCommitAuthorOperation($owner, $repo, $author_id);
    }
}
