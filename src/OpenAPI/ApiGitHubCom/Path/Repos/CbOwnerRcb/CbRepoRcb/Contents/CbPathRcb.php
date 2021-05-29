<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Contents;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateFileContents;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteFile;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContent;

final class CbPathRcb
{
    function get($owner, $repo, $path, $ref): GetContent
    {
        return new GetContent($owner, $repo, $path, $ref);
    }

    function put($owner, $repo, $path): CreateOrUpdateFileContents
    {
        return new CreateOrUpdateFileContents($owner, $repo, $path);
    }

    function delete($owner, $repo, $path): DeleteFile
    {
        return new DeleteFile($owner, $repo, $path);
    }
}
