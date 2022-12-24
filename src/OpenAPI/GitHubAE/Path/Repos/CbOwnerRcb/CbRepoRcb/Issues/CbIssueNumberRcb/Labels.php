<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Labels
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsOnIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsOnIssue($owner, $repo, $issue_number, $per_page, $page);
    }
    function put($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\SetLabels
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\SetLabels($owner, $repo, $issue_number);
    }
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddLabels
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddLabels($owner, $repo, $issue_number);
    }
    function delete($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAllLabels
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAllLabels($owner, $repo, $issue_number);
    }
}