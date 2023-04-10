<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"block":{"reason":"generated_reason_null","created_at":"generated_created_at_null","html_url":"generated_html_url_null"},"message":"generated_message_null","documentation_url":"generated_documentation_url_null"}';
    public function __construct(public ?Schema\Operation\Gists\Get\Response\Applicationjson\H403\Block $block, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
