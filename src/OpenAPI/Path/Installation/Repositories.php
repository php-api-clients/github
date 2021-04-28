<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Installation;

final class Repositories
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListReposAccessibleToInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListReposAccessibleToInstallationOperation($per_page, $page);
    }
}
