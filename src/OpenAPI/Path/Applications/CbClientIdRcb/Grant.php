<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Applications\CbClientIdRcb;

final class Grant
{
    function delete($client_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\DeleteAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\DeleteAuthorizationOperation($client_id);
    }
}
