<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Applications\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\DeleteAuthorization;

final class Grant
{
    function delete($client_id): DeleteAuthorization
    {
        return new DeleteAuthorization($client_id);
    }
}
