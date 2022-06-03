<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Migrations
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForAuthenticatedUser($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForAuthenticatedUser();
    }
}
