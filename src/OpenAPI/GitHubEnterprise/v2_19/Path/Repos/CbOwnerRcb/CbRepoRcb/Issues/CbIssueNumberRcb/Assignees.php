<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\AddAssignees;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\RemoveAssignees;

final class Assignees
{
    function post($owner, $repo, $issue_number): AddAssignees
    {
        return new AddAssignees($owner, $repo, $issue_number);
    }

    function delete($owner, $repo, $issue_number): RemoveAssignees
    {
        return new RemoveAssignees($owner, $repo, $issue_number);
    }
}
