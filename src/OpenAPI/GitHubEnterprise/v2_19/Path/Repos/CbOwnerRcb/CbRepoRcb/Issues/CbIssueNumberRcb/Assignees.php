<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\AddAssigneesOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\RemoveAssigneesOperation;

final class Assignees
{
    function post($owner, $repo, $issue_number): AddAssigneesOperation
    {
        return new AddAssigneesOperation($owner, $repo, $issue_number);
    }

    function delete($owner, $repo, $issue_number): RemoveAssigneesOperation
    {
        return new RemoveAssigneesOperation($owner, $repo, $issue_number);
    }
}
