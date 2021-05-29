<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\ListPublicEmailsForAuthenticatedOperation;

final class PublicEmails
{
    function get(int $per_page = 30, int $page = 1): ListPublicEmailsForAuthenticatedOperation
    {
        return new ListPublicEmailsForAuthenticatedOperation($per_page, $page);
    }
}
