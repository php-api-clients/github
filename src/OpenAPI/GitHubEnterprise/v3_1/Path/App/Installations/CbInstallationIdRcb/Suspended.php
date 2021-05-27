<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\App\Installations\CbInstallationIdRcb;

final class Suspended
{
    function put($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\SuspendInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\SuspendInstallationOperation($installation_id);
    }
    function delete($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\UnsuspendInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\UnsuspendInstallationOperation($installation_id);
    }
}
