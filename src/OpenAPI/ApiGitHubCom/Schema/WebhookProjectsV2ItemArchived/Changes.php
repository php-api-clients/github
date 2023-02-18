<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemArchived;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"archived_at":{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?ArchivedAt $archived_at;

    public function __construct(ArchivedAt $archived_at)
    {
        $this->archived_at = $archived_at;
    }
}
