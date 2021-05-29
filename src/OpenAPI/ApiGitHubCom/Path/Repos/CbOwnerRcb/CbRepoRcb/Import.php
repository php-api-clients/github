<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImportOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatusOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImportOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImportOperation;

final class Import
{
    function get($owner, $repo): GetImportStatusOperation
    {
        return new GetImportStatusOperation($owner, $repo);
    }

    function put($owner, $repo): StartImportOperation
    {
        return new StartImportOperation($owner, $repo);
    }

    function delete($owner, $repo): CancelImportOperation
    {
        return new CancelImportOperation($owner, $repo);
    }

    function patch($owner, $repo): UpdateImportOperation
    {
        return new UpdateImportOperation($owner, $repo);
    }
}
