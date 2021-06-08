<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\CreateCommitSignatureProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\DeleteCommitSignatureProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetCommitSignatureProtection;

final class RequiredSignatures
{
    function get($owner, $repo, $branch): GetCommitSignatureProtection
    {
        return new GetCommitSignatureProtection($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): CreateCommitSignatureProtection
    {
        return new CreateCommitSignatureProtection($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteCommitSignatureProtection
    {
        return new DeleteCommitSignatureProtection($owner, $repo, $branch);
    }
}
