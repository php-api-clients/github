<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract07dcb36b91f472daa9474ac97f1ce862
{
    public const SCHEMA_JSON         = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_null"},"pull_request":{"href":"generated_href_null"}}';

    public function __construct(public Schema\TimelineReviewedEvent\Links\Html $html, #[MapFrom('pull_request')] public Schema\TimelineReviewedEvent\Links\PullRequest $pullRequest)
    {
    }
}
