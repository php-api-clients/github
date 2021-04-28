<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Emails
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListEmailsForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListEmailsForAuthenticatedOperation($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\Operation\Users\AddEmailForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\AddEmailForAuthenticatedOperation();
    }
    function delete() : \ApiClients\Client\Github\OpenAPI\Operation\Users\DeleteEmailForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\DeleteEmailForAuthenticatedOperation();
    }
}
