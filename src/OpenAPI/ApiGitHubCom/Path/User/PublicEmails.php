<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class PublicEmails
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticated($per_page, $page);
    }
}
