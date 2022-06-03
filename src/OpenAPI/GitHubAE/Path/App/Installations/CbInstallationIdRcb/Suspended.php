<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\App\Installations\CbInstallationIdRcb;

final class Suspended
{
    function put($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\SuspendInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\SuspendInstallation($installation_id);
    }
    function delete($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UnsuspendInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UnsuspendInstallation($installation_id);
    }
}
