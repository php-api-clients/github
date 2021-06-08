<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Tokens;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessToken;

final class CbTokenIdRcb
{
    function delete($token_id): DeletePersonalAccessToken
    {
        return new DeletePersonalAccessToken($token_id);
    }
}
