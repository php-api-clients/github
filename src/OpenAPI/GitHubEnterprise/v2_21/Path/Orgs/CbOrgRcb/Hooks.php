<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb;

final class Hooks
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\ListWebhooks
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\ListWebhooks($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\CreateWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\CreateWebhook($org);
    }
}
