<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\CreateCommitSignatureProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\DeleteCommitSignatureProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetCommitSignatureProtectionOperation;

final class RequiredSignatures
{
    function get($owner, $repo, $branch): GetCommitSignatureProtectionOperation
    {
        return new GetCommitSignatureProtectionOperation($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): CreateCommitSignatureProtectionOperation
    {
        return new CreateCommitSignatureProtectionOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteCommitSignatureProtectionOperation
    {
        return new DeleteCommitSignatureProtectionOperation($owner, $repo, $branch);
    }
}
