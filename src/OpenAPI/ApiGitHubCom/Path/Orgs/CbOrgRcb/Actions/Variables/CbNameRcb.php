<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Variables;

final class CbNameRcb
{
    function get($org, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgVariable($org, $name);
    }
    function delete($org, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgVariable($org, $name);
    }
    function patch($org, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateOrgVariable($org, $name);
    }
}
