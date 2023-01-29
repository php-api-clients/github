<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class HookResponse
{
    public const SCHEMA_JSON = '{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Hook Response';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?int $code;
    public readonly ?string $status;
    public readonly ?string $message;
    public function __construct(int $code, string $status, string $message)
    {
        $this->code = $code;
        $this->status = $status;
        $this->message = $message;
    }
}
