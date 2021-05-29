<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Applications\CbClientIdRcb\Grants;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeGrantForApplicationOperation;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token): RevokeGrantForApplicationOperation
    {
        return new RevokeGrantForApplicationOperation($client_id, $access_token);
    }
}
