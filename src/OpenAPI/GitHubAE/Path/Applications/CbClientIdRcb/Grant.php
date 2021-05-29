<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Applications\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorization;

final class Grant
{
    function delete($client_id): DeleteAuthorization
    {
        return new DeleteAuthorization($client_id);
    }
}
