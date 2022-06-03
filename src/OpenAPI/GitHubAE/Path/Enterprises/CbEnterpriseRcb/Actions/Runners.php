<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions;

final class Runners
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($enterprise, $per_page, $page);
    }
}
