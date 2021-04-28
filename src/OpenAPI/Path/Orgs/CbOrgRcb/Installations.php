<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Installations
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListAppInstallationsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListAppInstallationsOperation($org, $per_page, $page);
    }
}
