<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\CheckIsStarred;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Unstar;

final class Star
{
    function get($gist_id): CheckIsStarred
    {
        return new CheckIsStarred($gist_id);
    }

    function put($gist_id): \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Star
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Star($gist_id);
    }

    function delete($gist_id): Unstar
    {
        return new Unstar($gist_id);
    }
}
