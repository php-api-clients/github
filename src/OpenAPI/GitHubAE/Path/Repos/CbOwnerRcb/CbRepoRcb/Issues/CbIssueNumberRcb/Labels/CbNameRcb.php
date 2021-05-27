<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels;

final class CbNameRcb
{
    function delete($owner, $repo, $issue_number, $name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveLabelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\RemoveLabelOperation($owner, $repo, $issue_number, $name);
    }
}
