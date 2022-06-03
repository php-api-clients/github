<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb;

final class ServerDashStatistics
{
    function get($enterprise_or_org, $date_start, $date_end) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics($enterprise_or_org, $date_start, $date_end);
    }
}
