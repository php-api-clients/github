<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectEdited\Changes\Body;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Body $body;

    public function __construct(Body $body)
    {
        $this->body = $body;
    }
}
