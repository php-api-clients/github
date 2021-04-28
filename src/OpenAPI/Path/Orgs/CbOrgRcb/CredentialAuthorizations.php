<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class CredentialAuthorizations
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListSamlSsoAuthorizationsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListSamlSsoAuthorizationsOperation($org);
    }
}
