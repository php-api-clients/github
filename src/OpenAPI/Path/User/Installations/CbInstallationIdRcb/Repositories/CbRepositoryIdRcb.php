<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Installations\CbInstallationIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\AddRepoToInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\AddRepoToInstallationOperation($installation_id, $repository_id);
    }
    function delete($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\RemoveRepoFromInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\RemoveRepoFromInstallationOperation($installation_id, $repository_id);
    }
}
