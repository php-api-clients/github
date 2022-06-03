<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Projects
{
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForAuthenticatedUser();
    }
}
