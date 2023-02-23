<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectsV2ItemConverted;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType $content_type;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType $content_type)
    {
        $this->content_type = $content_type;
    }
}
