<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson;

final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson\H403\Block $block;
    public ?string $message;
    public ?string $documentation_url;
    public function __construct(\ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson\H403\Block $block, string $message, string $documentation_url)
    {
        $this->block = $block;
        $this->message = $message;
        $this->documentation_url = $documentation_url;
    }
}
