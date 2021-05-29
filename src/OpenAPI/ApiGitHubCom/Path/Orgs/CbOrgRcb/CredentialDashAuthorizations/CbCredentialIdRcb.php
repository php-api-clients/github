<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\CredentialDashAuthorizations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorizationOperation;

final class CbCredentialIdRcb
{
    function delete($org, $credential_id): RemoveSamlSsoAuthorizationOperation
    {
        return new RemoveSamlSsoAuthorizationOperation($org, $credential_id);
    }
}
