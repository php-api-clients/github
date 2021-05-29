<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Applications\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteAuthorizationOperation;

final class Grant
{
    function delete($client_id): DeleteAuthorizationOperation
    {
        return new DeleteAuthorizationOperation($client_id);
    }
}
