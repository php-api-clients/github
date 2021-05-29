<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Contents;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateFileContentsOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteFileOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContentOperation;

final class CbPathRcb
{
    function get($owner, $repo, $path, $ref): GetContentOperation
    {
        return new GetContentOperation($owner, $repo, $path, $ref);
    }

    function put($owner, $repo, $path): CreateOrUpdateFileContentsOperation
    {
        return new CreateOrUpdateFileContentsOperation($owner, $repo, $path);
    }

    function delete($owner, $repo, $path): DeleteFileOperation
    {
        return new DeleteFileOperation($owner, $repo, $path);
    }
}
