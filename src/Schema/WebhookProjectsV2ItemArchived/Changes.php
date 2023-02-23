<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectsV2ItemArchived;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"archived_at":{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt $archived_at;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt $archived_at)
    {
        $this->archived_at = $archived_at;
    }
}
