<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookRepositoryEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_branch":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"homepage":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"topics":{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $default_branch;
    public ?\ApiClients\Client\Github\Schema\WebhookProjectCardEdited\Changes\Note $description;
    public ?\ApiClients\Client\Github\Schema\WebhookProjectCardEdited\Changes\Note $homepage;
    public ?\ApiClients\Client\Github\Schema\WebhookRepositoryEdited\Changes\Topics $topics;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $default_branch, \ApiClients\Client\Github\Schema\WebhookProjectCardEdited\Changes\Note $description, \ApiClients\Client\Github\Schema\WebhookProjectCardEdited\Changes\Note $homepage, \ApiClients\Client\Github\Schema\WebhookRepositoryEdited\Changes\Topics $topics)
    {
        $this->default_branch = $default_branch;
        $this->description = $description;
        $this->homepage = $homepage;
        $this->topics = $topics;
    }
}
