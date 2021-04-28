<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Installation;

final class Token
{
    function delete() : \ApiClients\Client\Github\OpenAPI\Operation\Apps\RevokeInstallationAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\RevokeInstallationAccessTokenOperation();
    }
}
