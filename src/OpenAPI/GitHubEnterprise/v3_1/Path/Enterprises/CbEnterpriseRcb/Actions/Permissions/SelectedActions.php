<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Enterprises\CbEnterpriseRcb\Actions\Permissions;

final class SelectedActions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllowedActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllowedActionsEnterpriseOperation($enterprise);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAllowedActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAllowedActionsEnterpriseOperation($enterprise);
    }
}
