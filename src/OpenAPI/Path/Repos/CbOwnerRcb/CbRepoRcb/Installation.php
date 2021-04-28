<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Installation
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetRepoInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetRepoInstallationOperation($owner, $repo);
    }
}
