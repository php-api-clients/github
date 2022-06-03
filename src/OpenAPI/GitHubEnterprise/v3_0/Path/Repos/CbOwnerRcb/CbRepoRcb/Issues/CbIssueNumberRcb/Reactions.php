<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Reactions
{
    function get($owner, $repo, $issue_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\ListForIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\ListForIssue($owner, $repo, $issue_number, $content, $per_page, $page);
    }
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\CreateForIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\CreateForIssue($owner, $repo, $issue_number);
    }
}
