<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\App\Installations;

final class CbInstallationIdRcb
{
    function get($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetInstallation($installation_id);
    }
    function delete($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteInstallation($installation_id);
    }
}
