<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update($org);
    }
}
