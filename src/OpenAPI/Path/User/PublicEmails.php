<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class PublicEmails
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListPublicEmailsForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListPublicEmailsForAuthenticatedOperation($per_page, $page);
    }
}
