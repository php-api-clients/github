<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class Hooks
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook($org);
    }
}
