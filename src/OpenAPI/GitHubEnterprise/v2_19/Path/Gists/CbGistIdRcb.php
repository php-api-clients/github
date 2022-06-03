<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Gists;

final class CbGistIdRcb
{
    function get($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Get($gist_id);
    }
    function delete($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Delete($gist_id);
    }
    function patch($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Update($gist_id);
    }
}
