<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Applications\CbClientIdRcb\Grants;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RevokeGrantForApplicationOperation;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token): RevokeGrantForApplicationOperation
    {
        return new RevokeGrantForApplicationOperation($client_id, $access_token);
    }
}
