<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarkNotificationsAsRead\Response\Application\Json;

final class H202
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'MarkNotificationsAsRead\\Response\\Application\\Json\\H202';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    public function message() : string
    {
        return $this->message;
    }
}
