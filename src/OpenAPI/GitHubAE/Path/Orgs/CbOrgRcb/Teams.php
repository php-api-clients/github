<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

final class Teams
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\List($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\Create($org);
    }
}
