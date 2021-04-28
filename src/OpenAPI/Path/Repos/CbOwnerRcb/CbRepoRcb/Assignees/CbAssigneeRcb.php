<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Assignees;

final class CbAssigneeRcb
{
    function get($owner, $repo, $assignee) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\CheckUserCanBeAssignedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\CheckUserCanBeAssignedOperation($owner, $repo, $assignee);
    }
}
