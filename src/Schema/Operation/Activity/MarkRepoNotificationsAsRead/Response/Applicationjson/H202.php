<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Activity\MarkRepoNotificationsAsRead\Response\Applicationjson;

final readonly class H202
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $message;
    public ?string $url;
    public function __construct(string $message, string $url)
    {
        $this->message = $message;
        $this->url = $url;
    }
}
