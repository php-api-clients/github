<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\;

interface AuthenticationInterface
{
    public function authHeader() : string;
}
