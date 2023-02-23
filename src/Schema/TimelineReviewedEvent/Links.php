<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\TimelineReviewedEvent;

final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\TimelineReviewedEvent\Links\Html $html;
    public ?\ApiClients\Client\Github\Schema\TimelineReviewedEvent\Links\Html $pull_request;
    public function __construct(\ApiClients\Client\Github\Schema\TimelineReviewedEvent\Links\Html $html, \ApiClients\Client\Github\Schema\TimelineReviewedEvent\Links\Html $pull_request)
    {
        $this->html = $html;
        $this->pull_request = $pull_request;
    }
}
