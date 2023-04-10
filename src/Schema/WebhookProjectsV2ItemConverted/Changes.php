<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectsV2ItemConverted;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content_type":{"from":"generated_from_null","to":"generated_to_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public ?Schema\WebhookProjectsV2ItemConverted\Changes\ContentType $contentType)
    {
    }
}
