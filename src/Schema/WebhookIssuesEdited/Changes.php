<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookIssuesEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title."}}}},"description":"The changes to the issue."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the issue.';
    public ?\ApiClients\Client\Github\Schema\WebhookIssueCommentEdited\Changes\Body $body;
    public ?\ApiClients\Client\Github\Schema\WebhookIssuesEdited\Changes\Title $title;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookIssueCommentEdited\Changes\Body $body, \ApiClients\Client\Github\Schema\WebhookIssuesEdited\Changes\Title $title)
    {
        $this->body = $body;
        $this->title = $title;
    }
}
