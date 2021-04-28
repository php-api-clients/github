<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Runners;

final class Downloads
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRunnerApplicationsForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRunnerApplicationsForOrgOperation($org);
    }
}
