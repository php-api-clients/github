<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookMemberEdited\Changes;

final readonly class Permission
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $from;
    public ?string $to;
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
