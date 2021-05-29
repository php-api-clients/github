<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSamlSsoAuthorizations;

final class CredentialAuthorizations
{
    function get($org): ListSamlSsoAuthorizations
    {
        return new ListSamlSsoAuthorizations($org);
    }
}
