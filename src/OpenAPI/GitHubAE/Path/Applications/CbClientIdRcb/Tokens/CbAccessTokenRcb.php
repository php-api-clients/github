<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Applications\CbClientIdRcb\Tokens;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckAuthorizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeAuthorizationForApplicationOperation;

final class CbAccessTokenRcb
{
    function get($client_id, $access_token): CheckAuthorizationOperation
    {
        return new CheckAuthorizationOperation($client_id, $access_token);
    }

    function post($client_id, $access_token): ResetAuthorizationOperation
    {
        return new ResetAuthorizationOperation($client_id, $access_token);
    }

    function delete($client_id, $access_token): RevokeAuthorizationForApplicationOperation
    {
        return new RevokeAuthorizationForApplicationOperation($client_id, $access_token);
    }
}
