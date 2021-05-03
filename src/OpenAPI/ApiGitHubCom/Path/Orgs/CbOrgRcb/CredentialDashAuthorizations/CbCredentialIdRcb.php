<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Orgs\CbOrgRcb\CredentialDashAuthorizations;

final class CbCredentialIdRcb
{
    function delete($org, $credential_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorizationOperation($org, $credential_id);
    }
}
