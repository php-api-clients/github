<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CheckIsStarred;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Unstar;

final class Star
{
    function get($gist_id): CheckIsStarred
    {
        return new CheckIsStarred($gist_id);
    }

    function put($gist_id): \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Star
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Star($gist_id);
    }

    function delete($gist_id): Unstar
    {
        return new Unstar($gist_id);
    }
}
