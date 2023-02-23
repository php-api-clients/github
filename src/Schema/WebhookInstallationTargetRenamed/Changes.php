<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookInstallationTargetRenamed;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $login;
    public ?\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $slug;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $login, \ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited\Changes\Body $slug)
    {
        $this->login = $login;
        $this->slug = $slug;
    }
}
