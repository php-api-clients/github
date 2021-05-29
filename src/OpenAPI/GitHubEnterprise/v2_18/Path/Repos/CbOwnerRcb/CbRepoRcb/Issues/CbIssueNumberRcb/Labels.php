<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\AddLabels;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\ListLabelsOnIssue;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\RemoveAllLabels;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\SetLabels;

final class Labels
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1): ListLabelsOnIssue
    {
        return new ListLabelsOnIssue($owner, $repo, $issue_number, $per_page, $page);
    }

    function put($owner, $repo, $issue_number): SetLabels
    {
        return new SetLabels($owner, $repo, $issue_number);
    }

    function post($owner, $repo, $issue_number): AddLabels
    {
        return new AddLabels($owner, $repo, $issue_number);
    }

    function delete($owner, $repo, $issue_number): RemoveAllLabels
    {
        return new RemoveAllLabels($owner, $repo, $issue_number);
    }
}
