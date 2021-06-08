<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport;

final class Import
{
    function get($owner, $repo): GetImportStatus
    {
        return new GetImportStatus($owner, $repo);
    }

    function put($owner, $repo): StartImport
    {
        return new StartImport($owner, $repo);
    }

    function delete($owner, $repo): CancelImport
    {
        return new CancelImport($owner, $repo);
    }

    function patch($owner, $repo): UpdateImport
    {
        return new UpdateImport($owner, $repo);
    }
}
