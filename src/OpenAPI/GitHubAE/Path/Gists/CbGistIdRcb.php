<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists;

final class CbGistIdRcb
{
    function get($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Get($gist_id);
    }
    function delete($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Delete($gist_id);
    }
    function patch($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Update($gist_id);
    }
}
