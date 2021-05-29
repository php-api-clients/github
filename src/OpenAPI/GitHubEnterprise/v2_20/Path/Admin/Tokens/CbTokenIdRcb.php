<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin\Tokens;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation;

final class CbTokenIdRcb
{
    function delete($token_id): DeletePersonalAccessTokenOperation
    {
        return new DeletePersonalAccessTokenOperation($token_id);
    }
}
