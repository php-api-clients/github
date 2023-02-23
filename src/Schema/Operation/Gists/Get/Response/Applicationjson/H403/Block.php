<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson\H403;

final readonly class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $reason;
    public ?string $created_at;
    public ?string $html_url;
    public function __construct(string $reason, string $created_at, string $html_url)
    {
        $this->reason = $reason;
        $this->created_at = $created_at;
        $this->html_url = $html_url;
    }
}
