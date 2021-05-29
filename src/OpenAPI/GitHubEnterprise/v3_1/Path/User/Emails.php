<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\AddEmailForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeleteEmailForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListEmailsForAuthenticated;

final class Emails
{
    function get(int $per_page = 30, int $page = 1): ListEmailsForAuthenticated
    {
        return new ListEmailsForAuthenticated($per_page, $page);
    }

    function post(): AddEmailForAuthenticated
    {
        return new AddEmailForAuthenticated();
    }

    function delete(): DeleteEmailForAuthenticated
    {
        return new DeleteEmailForAuthenticated();
    }
}
