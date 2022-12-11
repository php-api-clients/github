<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Oidc
{
    public function getOidcCustomSubTemplateForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg_($org);
    }
    public function updateOidcCustomSubTemplateForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg_($org);
    }
}
