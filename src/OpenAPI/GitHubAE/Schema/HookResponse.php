<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class HookResponse
{
    public const SCHEMA_JSON = '{"title":"Hook Response","required":["code","status","message"],"type":"object","properties":{"code":{"type":["integer","null"]},"status":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Hook Response';
    public const SCHEMA_DESCRIPTION = '';
    private $code;
    private $status;
    private $message;
    public function code()
    {
        return $this->code;
    }
    public function status()
    {
        return $this->status;
    }
    public function message()
    {
        return $this->message;
    }
}
