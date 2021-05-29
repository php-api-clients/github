<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Applications\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CheckTokenOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteTokenOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ResetTokenOperation;

final class Token
{
    function post($client_id): CheckTokenOperation
    {
        return new CheckTokenOperation($client_id);
    }

    function delete($client_id): DeleteTokenOperation
    {
        return new DeleteTokenOperation($client_id);
    }

    function patch($client_id): ResetTokenOperation
    {
        return new ResetTokenOperation($client_id);
    }
}
