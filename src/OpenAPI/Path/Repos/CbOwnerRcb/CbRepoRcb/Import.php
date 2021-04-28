<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Import
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetImportStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetImportStatusOperation($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\StartImportOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\StartImportOperation($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\CancelImportOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\CancelImportOperation($owner, $repo);
    }
    function patch($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\UpdateImportOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\UpdateImportOperation($owner, $repo);
    }
}
