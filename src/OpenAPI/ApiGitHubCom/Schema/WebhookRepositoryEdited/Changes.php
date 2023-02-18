<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRepositoryEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionCommentEdited\Changes\Body;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardEdited\Changes\Note;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRepositoryEdited\Changes\Topics;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"default_branch":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"homepage":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"topics":{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Body $default_branch;
    public ?Note $description;
    public ?Note $homepage;
    public ?Topics $topics;

    public function __construct(Body $default_branch, Note $description, Note $homepage, Topics $topics)
    {
        $this->default_branch = $default_branch;
        $this->description    = $description;
        $this->homepage       = $homepage;
        $this->topics         = $topics;
    }
}
