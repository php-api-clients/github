<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListPublicEmailsForAuthenticated;

final class PublicEmails
{
    function get(int $per_page = 30, int $page = 1): ListPublicEmailsForAuthenticated
    {
        return new ListPublicEmailsForAuthenticated($per_page, $page);
    }
}