<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\TimelineReviewedEvent;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_null"},"pull_request":{"href":"generated_href_null"}}';
    public function __construct(public Schema\TimelineReviewedEvent\Links\Html $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public Schema\TimelineReviewedEvent\Links\Html $pullRequest)
    {
    }
}
