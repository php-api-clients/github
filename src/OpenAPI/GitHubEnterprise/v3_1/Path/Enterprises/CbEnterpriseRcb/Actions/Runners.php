<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Enterprises\CbEnterpriseRcb\Actions;

final class Runners
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterpriseOperation($enterprise, $per_page, $page);
    }
}
