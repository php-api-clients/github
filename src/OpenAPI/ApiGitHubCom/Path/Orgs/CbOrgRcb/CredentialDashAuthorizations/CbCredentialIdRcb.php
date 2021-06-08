<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\CredentialDashAuthorizations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorization;

final class CbCredentialIdRcb
{
    function delete($org, $credential_id): RemoveSamlSsoAuthorization
    {
        return new RemoveSamlSsoAuthorization($org, $credential_id);
    }
}
