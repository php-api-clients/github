<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Credential-Authorizations;

final class CbCredentialIdRcb
{
    function delete($org, $credential_id) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\RemoveSamlSsoAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\RemoveSamlSsoAuthorizationOperation($org, $credential_id);
    }
}
