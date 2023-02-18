<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookIssueCommentEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookIssueCommentEdited\Changes\Body;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}}},"description":"The changes to the comment."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment.';
    public ?Body $body;

    public function __construct(Body $body)
    {
        $this->body = $body;
    }
}
