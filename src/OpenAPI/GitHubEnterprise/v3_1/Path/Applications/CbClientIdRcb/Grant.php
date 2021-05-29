<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Applications\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\DeleteAuthorizationOperation;

final class Grant
{
    function delete($client_id): DeleteAuthorizationOperation
    {
        return new DeleteAuthorizationOperation($client_id);
    }
}
