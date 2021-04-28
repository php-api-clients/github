<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class Restrictions
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAccessRestrictionsOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
