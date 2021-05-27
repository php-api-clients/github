<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\App\Installations;

final class CbInstallationIdRcb
{
    function get($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetInstallationOperation($installation_id);
    }
    function delete($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\DeleteInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\DeleteInstallationOperation($installation_id);
    }
}
