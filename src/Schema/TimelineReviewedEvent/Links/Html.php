<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Html
{
    public const SCHEMA_JSON = '{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated_href"}';
    public function __construct(public ?string $href)
    {
    }
}
