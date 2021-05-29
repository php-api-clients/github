<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveLabelOperation;

final class CbNameRcb
{
    function delete($owner, $repo, $issue_number, $name): RemoveLabelOperation
    {
        return new RemoveLabelOperation($owner, $repo, $issue_number, $name);
    }
}
