<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetAuthenticated();
    }
}
