<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\Get;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\Update;

final class CbIssueNumberRcb
{
    function get($owner, $repo, $issue_number): Get
    {
        return new Get($owner, $repo, $issue_number);
    }

    function patch($owner, $repo, $issue_number): Update
    {
        return new Update($owner, $repo, $issue_number);
    }
}
