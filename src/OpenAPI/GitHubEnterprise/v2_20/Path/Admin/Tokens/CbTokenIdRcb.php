<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin\Tokens;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePersonalAccessToken;

final class CbTokenIdRcb
{
    function delete($token_id): DeletePersonalAccessToken
    {
        return new DeletePersonalAccessToken($token_id);
    }
}
