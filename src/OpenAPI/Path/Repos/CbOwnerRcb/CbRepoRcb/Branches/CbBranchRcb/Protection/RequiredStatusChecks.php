<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class RequiredStatusChecks
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetStatusChecksProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetStatusChecksProtectionOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveStatusCheckProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveStatusCheckProtectionOperation($owner, $repo, $branch);
    }
    function patch($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateStatusCheckProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateStatusCheckProtectionOperation($owner, $repo, $branch);
    }
}
