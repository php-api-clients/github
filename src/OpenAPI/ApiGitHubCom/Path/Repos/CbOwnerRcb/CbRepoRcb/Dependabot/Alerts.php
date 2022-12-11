<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Dependabot;

final class Alerts
{
    function get($owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, $before, $after, int $first = 30, $last) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForRepo($owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $sort, $direction, $page, $per_page, $before, $after, $first, $last);
    }
}
