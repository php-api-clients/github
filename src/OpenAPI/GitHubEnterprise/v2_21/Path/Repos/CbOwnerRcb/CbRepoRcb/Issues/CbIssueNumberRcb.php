<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

final class CbIssueNumberRcb
{
    function get($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\Get($owner, $repo, $issue_number);
    }
    function patch($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\Update($owner, $repo, $issue_number);
    }
}
