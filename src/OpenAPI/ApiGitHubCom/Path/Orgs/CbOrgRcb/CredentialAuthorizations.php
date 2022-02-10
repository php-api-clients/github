<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class CredentialAuthorizations
{
    function get($org, int $per_page = 30, $page, $login) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSamlSsoAuthorizations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSamlSsoAuthorizations($org, $per_page, $page, $login);
    }
}
