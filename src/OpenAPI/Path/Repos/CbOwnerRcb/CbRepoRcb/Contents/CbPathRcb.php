<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Contents;

final class CbPathRcb
{
    function get($owner, $repo, $path, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetContentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetContentOperation($owner, $repo, $path, $ref);
    }
    function put($owner, $repo, $path) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateOrUpdateFileContentsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateOrUpdateFileContentsOperation($owner, $repo, $path);
    }
    function delete($owner, $repo, $path) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteFileOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteFileOperation($owner, $repo, $path);
    }
}
