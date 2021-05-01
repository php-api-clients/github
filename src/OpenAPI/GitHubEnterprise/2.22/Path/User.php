<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Users\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Users\GetAuthenticatedOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Users\UpdateAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Users\UpdateAuthenticatedOperation();
    }
}
