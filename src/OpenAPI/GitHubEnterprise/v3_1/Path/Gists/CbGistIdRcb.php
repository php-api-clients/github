<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Gists;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\DeleteOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\GetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\UpdateOperation;

final class CbGistIdRcb
{
    function get($gist_id): GetOperation
    {
        return new GetOperation($gist_id);
    }

    function delete($gist_id): DeleteOperation
    {
        return new DeleteOperation($gist_id);
    }

    function patch($gist_id): UpdateOperation
    {
        return new UpdateOperation($gist_id);
    }
}
