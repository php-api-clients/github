<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Applications\CbClientIdRcb;

final class Token
{
    function post($client_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\CheckTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\CheckTokenOperation($client_id);
    }
    function delete($client_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\DeleteTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\DeleteTokenOperation($client_id);
    }
    function patch($client_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ResetTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ResetTokenOperation($client_id);
    }
}
