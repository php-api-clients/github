<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Lfs
{
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\EnableLfsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\EnableLfsForRepo($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DisableLfsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DisableLfsForRepo($owner, $repo);
    }
}
