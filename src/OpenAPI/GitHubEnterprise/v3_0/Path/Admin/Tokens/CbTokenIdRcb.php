<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin\Tokens;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation;

final class CbTokenIdRcb
{
    function delete($token_id): DeletePersonalAccessTokenOperation
    {
        return new DeletePersonalAccessTokenOperation($token_id);
    }
}
