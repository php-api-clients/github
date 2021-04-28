<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Projects
{
    function post() : \ApiClients\Client\Github\OpenAPI\Operation\Projects\CreateForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Projects\CreateForAuthenticatedUserOperation();
    }
}
