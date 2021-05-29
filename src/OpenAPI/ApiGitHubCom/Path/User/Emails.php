<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedOperation;

final class Emails
{
    function get(int $per_page = 30, int $page = 1): ListEmailsForAuthenticatedOperation
    {
        return new ListEmailsForAuthenticatedOperation($per_page, $page);
    }

    function post(): AddEmailForAuthenticatedOperation
    {
        return new AddEmailForAuthenticatedOperation();
    }

    function delete(): DeleteEmailForAuthenticatedOperation
    {
        return new DeleteEmailForAuthenticatedOperation();
    }
}
