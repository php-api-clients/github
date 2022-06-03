<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\App\Installations;

final class CbInstallationIdRcb
{
    function get($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetInstallation($installation_id);
    }
    function delete($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteInstallation($installation_id);
    }
}
