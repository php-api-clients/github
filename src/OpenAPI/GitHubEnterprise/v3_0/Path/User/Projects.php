<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User;

final class Projects
{
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\CreateForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\CreateForAuthenticatedUser();
    }
}
