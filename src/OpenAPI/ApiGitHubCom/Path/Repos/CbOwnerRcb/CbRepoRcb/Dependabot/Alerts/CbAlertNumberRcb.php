<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetAlert($owner, $repo, $alert_number);
    }
    function patch($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\UpdateAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\UpdateAlert($owner, $repo, $alert_number);
    }
}
