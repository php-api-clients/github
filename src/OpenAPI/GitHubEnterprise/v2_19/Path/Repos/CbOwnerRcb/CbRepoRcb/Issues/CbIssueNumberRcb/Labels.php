<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\AddLabelsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\ListLabelsOnIssueOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\RemoveAllLabelsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\SetLabelsOperation;

final class Labels
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1): ListLabelsOnIssueOperation
    {
        return new ListLabelsOnIssueOperation($owner, $repo, $issue_number, $per_page, $page);
    }

    function put($owner, $repo, $issue_number): SetLabelsOperation
    {
        return new SetLabelsOperation($owner, $repo, $issue_number);
    }

    function post($owner, $repo, $issue_number): AddLabelsOperation
    {
        return new AddLabelsOperation($owner, $repo, $issue_number);
    }

    function delete($owner, $repo, $issue_number): RemoveAllLabelsOperation
    {
        return new RemoveAllLabelsOperation($owner, $repo, $issue_number);
    }
}
