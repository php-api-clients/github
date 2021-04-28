<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb;

final class Installation
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetUserInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetUserInstallationOperation($username);
    }
}
