<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\TimelineReviewedEvent;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"}}';
    public function __construct(public ?Schema\TimelineReviewedEvent\Links\Html $html, public ?Schema\TimelineReviewedEvent\Links\Html $pull_request)
    {
    }
}
