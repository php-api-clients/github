<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class GpgKeys
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedUser($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser();
    }
}
