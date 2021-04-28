<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues;

final class CbIssueNumberRcb
{
    function get($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetOperation($owner, $repo, $issue_number);
    }
    function patch($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateOperation($owner, $repo, $issue_number);
    }
}
