<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

final class SelectedActions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise($enterprise);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise($enterprise);
    }
}
