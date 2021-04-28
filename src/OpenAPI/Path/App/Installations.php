<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\App;

final class Installations
{
    function get(int $per_page = 30, int $page = 1, $since, $outdated) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListInstallationsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListInstallationsOperation($per_page, $page, $since, $outdated);
    }
}
