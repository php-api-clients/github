<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Dependabot;

final class Alerts
{
    function get($org, $state, $severity, $ecosystem, $package, $scope, string $sort = 'created', string $direction = 'desc', $before, $after, int $first = 30, $last, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForOrg($org, $state, $severity, $ecosystem, $package, $scope, $sort, $direction, $before, $after, $first, $last, $per_page);
    }
}
