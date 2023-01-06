<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403;

final class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'H403\\Block';
    public const SCHEMA_DESCRIPTION = '';
    private string $reason;
    private string $created_at;
    private ?string $html_url;
    public function reason() : string
    {
        return $this->reason;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
