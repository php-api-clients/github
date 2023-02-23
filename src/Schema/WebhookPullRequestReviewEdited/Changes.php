<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPullRequestReviewEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookProjectEdited\Changes\Body $body;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookProjectEdited\Changes\Body $body)
    {
        $this->body = $body;
    }
}
