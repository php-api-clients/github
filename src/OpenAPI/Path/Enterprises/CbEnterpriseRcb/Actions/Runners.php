<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Actions;

final class Runners
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterpriseOperation($enterprise, $per_page, $page);
    }
}
