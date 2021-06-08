<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\RemoveLabel;

final class CbNameRcb
{
    function delete($owner, $repo, $issue_number, $name): RemoveLabel
    {
        return new RemoveLabel($owner, $repo, $issue_number, $name);
    }
}
