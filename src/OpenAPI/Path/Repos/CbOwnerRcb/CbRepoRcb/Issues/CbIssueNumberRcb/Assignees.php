<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Assignees
{
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\AddAssigneesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\AddAssigneesOperation($owner, $repo, $issue_number);
    }
    function delete($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\RemoveAssigneesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\RemoveAssigneesOperation($owner, $repo, $issue_number);
    }
}
