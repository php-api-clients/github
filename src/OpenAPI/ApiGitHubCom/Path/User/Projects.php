<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\User;

final class Projects
{
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUserOperation();
    }
}
