<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Labels
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsOnIssueOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsOnIssueOperation($owner, $repo, $issue_number, $per_page, $page);
    }
    function put($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\SetLabelsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\SetLabelsOperation($owner, $repo, $issue_number);
    }
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddLabelsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\AddLabelsOperation($owner, $repo, $issue_number);
    }
    function delete($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAllLabelsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveAllLabelsOperation($owner, $repo, $issue_number);
    }
}
