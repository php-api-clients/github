<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Applications\CbClientIdRcb\Grants;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\RevokeGrantForApplicationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\RevokeGrantForApplicationOperation($client_id, $access_token);
    }
}
