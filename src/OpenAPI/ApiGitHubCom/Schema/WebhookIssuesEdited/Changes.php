<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookIssuesEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookIssueCommentEdited\Changes\Body;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookIssuesEdited\Changes\Title;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title."}}}},"description":"The changes to the issue."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the issue.';
    public ?Body $body;
    public ?Title $title;

    public function __construct(Body $body, Title $title)
    {
        $this->body  = $body;
        $this->title = $title;
    }
}
