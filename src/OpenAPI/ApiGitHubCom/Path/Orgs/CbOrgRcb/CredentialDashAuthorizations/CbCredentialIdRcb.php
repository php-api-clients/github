<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\CredentialDashAuthorizations;

final class CbCredentialIdRcb
{
    function delete($org, $credential_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorization($org, $credential_id);
    }
}
