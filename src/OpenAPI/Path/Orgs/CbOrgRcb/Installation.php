<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Installation
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetOrgInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetOrgInstallationOperation($org);
    }
}
