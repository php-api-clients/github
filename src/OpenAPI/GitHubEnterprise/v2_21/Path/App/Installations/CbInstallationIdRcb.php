<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\App\Installations;

final class CbInstallationIdRcb
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetInstallation($accept, $installation_id);
    }
    function delete(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteInstallation($accept, $installation_id);
    }
}
