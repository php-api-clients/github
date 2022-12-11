<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Oidc\Customization;

final class Sub
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg($org);
    }
}
