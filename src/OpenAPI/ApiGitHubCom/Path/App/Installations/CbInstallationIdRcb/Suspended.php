<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Installations\CbInstallationIdRcb;

final class Suspended
{
    function put($installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallationOperation($installation_id);
    }
    function delete($installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallationOperation($installation_id);
    }
}
