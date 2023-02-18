<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemConverted;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"content_type":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?ContentType $content_type;

    public function __construct(ContentType $content_type)
    {
        $this->content_type = $content_type;
    }
}
