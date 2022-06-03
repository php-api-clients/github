<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Cache;

final class Usage
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForEnterprise($enterprise);
    }
}
