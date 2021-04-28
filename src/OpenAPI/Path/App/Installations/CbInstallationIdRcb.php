<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\App\Installations;

final class CbInstallationIdRcb
{
    function get($installation_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetInstallationOperation($installation_id);
    }
    function delete($installation_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\DeleteInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\DeleteInstallationOperation($installation_id);
    }
}
