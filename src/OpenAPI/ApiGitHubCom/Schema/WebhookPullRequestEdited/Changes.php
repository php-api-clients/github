<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMilestoneEdited\Changes\Title;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectEdited\Changes\Body;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestEdited\Changes\Base;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"base":{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}},"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the comment if the action was `edited`."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment if the action was `edited`.';
    public ?Base $base;
    public ?Body $body;
    public ?Title $title;

    public function __construct(Base $base, Body $body, Title $title)
    {
        $this->base  = $base;
        $this->body  = $body;
        $this->title = $title;
    }
}
