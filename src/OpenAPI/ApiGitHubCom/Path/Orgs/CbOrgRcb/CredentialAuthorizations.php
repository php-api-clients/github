<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSamlSsoAuthorizationsOperation;

final class CredentialAuthorizations
{
    function get($org): ListSamlSsoAuthorizationsOperation
    {
        return new ListSamlSsoAuthorizationsOperation($org);
    }
}
