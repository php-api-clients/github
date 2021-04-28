<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class RequiredSignatures
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommitSignatureProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommitSignatureProtectionOperation($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateCommitSignatureProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateCommitSignatureProtectionOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteCommitSignatureProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteCommitSignatureProtectionOperation($owner, $repo, $branch);
    }
}
