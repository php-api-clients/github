<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateOperation;

final class CbIssueNumberRcb
{
    function get($owner, $repo, $issue_number): GetOperation
    {
        return new GetOperation($owner, $repo, $issue_number);
    }

    function patch($owner, $repo, $issue_number): UpdateOperation
    {
        return new UpdateOperation($owner, $repo, $issue_number);
    }
}
