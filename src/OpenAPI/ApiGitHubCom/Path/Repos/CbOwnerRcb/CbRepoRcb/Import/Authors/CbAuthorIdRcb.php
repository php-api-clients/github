<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor;

final class CbAuthorIdRcb
{
    function patch($owner, $repo, $author_id): MapCommitAuthor
    {
        return new MapCommitAuthor($owner, $repo, $author_id);
    }
}
