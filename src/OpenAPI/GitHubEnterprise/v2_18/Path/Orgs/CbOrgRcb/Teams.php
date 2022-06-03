<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb;

final class Teams
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\List($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Create($org);
    }
}
