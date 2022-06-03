<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class RequiredSignatures
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitSignatureProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitSignatureProtection($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitSignatureProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitSignatureProtection($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteCommitSignatureProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteCommitSignatureProtection($owner, $repo, $branch);
    }
}
