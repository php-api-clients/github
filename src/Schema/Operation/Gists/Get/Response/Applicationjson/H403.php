<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Gists\Get\Response\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"block":{"reason":"generated_reason","created_at":"generated_created_at","html_url":"generated_html_url"},"message":"generated_message","documentation_url":"generated_documentation_url"}';
    public function __construct(public ?Schema\Operation\Gists\Get\Response\Applicationjson\H403\Block $block, public ?string $message, public ?string $documentation_url)
    {
    }
}
