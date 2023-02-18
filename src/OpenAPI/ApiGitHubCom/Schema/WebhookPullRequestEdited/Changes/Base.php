<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestEdited\Changes;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionCommentEdited\Changes\Body;

final readonly class Base
{
    public const SCHEMA_JSON        = '{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Body $ref;
    public ?Body $sha;

    public function __construct(Body $ref, Body $sha)
    {
        $this->ref = $ref;
        $this->sha = $sha;
    }
}
