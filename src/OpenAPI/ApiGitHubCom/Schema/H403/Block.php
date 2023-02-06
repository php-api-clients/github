<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403;

final class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'H403\\Block';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $reason;
    public readonly string $created_at;
    public readonly ?string $html_url;
    public function __construct(string $reason, string $created_at, string $html_url)
    {
        $this->reason = $reason;
        $this->created_at = $created_at;
        $this->html_url = $html_url;
    }
}
