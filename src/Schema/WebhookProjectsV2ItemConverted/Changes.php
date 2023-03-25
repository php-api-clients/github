<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"contentType":{"from":"generated_from_null","to":"generated_to_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public ?Schema\WebhookProjectsV2ItemConverted\Changes\ContentType $contentType)
    {
    }
}
