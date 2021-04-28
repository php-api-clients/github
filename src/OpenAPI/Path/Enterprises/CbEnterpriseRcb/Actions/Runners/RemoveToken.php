<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class RemoveToken
{
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterpriseOperation($enterprise);
    }
}
