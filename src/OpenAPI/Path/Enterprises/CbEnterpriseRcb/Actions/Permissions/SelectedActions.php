<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Actions\Permissions;

final class SelectedActions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\GetAllowedActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\GetAllowedActionsEnterpriseOperation($enterprise);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\SetAllowedActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\SetAllowedActionsEnterpriseOperation($enterprise);
    }
}
