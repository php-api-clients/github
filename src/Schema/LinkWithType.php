<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class LinkWithType
{
    public const SCHEMA_JSON = '{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}';
    public const SCHEMA_TITLE = 'Link With Type';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link with Type';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated_href_null","type":"generated_type_null"}';
    public function __construct(public string $href, public string $type)
    {
    }
}
