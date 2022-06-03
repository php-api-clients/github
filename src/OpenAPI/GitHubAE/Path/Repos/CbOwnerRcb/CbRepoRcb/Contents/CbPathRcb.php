<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Contents;

final class CbPathRcb
{
    function get($owner, $repo, $path, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContent
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetContent($owner, $repo, $path, $ref);
    }
    function put($owner, $repo, $path) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateOrUpdateFileContents
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateOrUpdateFileContents($owner, $repo, $path);
    }
    function delete($owner, $repo, $path) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteFile
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteFile($owner, $repo, $path);
    }
}
