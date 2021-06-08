<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Gists;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\Delete;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\Get;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\Update;

final class CbGistIdRcb
{
    function get($gist_id): Get
    {
        return new Get($gist_id);
    }

    function delete($gist_id): Delete
    {
        return new Delete($gist_id);
    }

    function patch($gist_id): Update
    {
        return new Update($gist_id);
    }
}
