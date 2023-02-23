<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectColumnEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $name;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $name)
    {
        $this->name = $name;
    }
}
