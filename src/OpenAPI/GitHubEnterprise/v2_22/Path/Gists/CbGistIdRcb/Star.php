<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Gists\CbGistIdRcb;

final class Star
{
    function get($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\CheckIsStarred
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\CheckIsStarred($gist_id);
    }
    function put($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\Star
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\Star($gist_id);
    }
    function delete($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\Unstar
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\Unstar($gist_id);
    }
}
