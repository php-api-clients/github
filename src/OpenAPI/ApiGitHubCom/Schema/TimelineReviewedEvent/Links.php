<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineReviewedEvent;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineReviewedEvent\Links\Html;

final readonly class Links
{
    public const SCHEMA_JSON        = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Html $html;
    public ?Html $pull_request;

    public function __construct(Html $html, Html $pull_request)
    {
        $this->html         = $html;
        $this->pull_request = $pull_request;
    }
}
