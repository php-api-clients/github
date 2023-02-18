<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionCommentEdited\Changes\Body;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Body $login;
    public ?Body $slug;

    public function __construct(Body $login, Body $slug)
    {
        $this->login = $login;
        $this->slug  = $slug;
    }
}
