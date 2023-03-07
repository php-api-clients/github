<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Gists\Get\Response\Applicationjson\H403;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reason":"generated_reason","created_at":"generated_created_at","html_url":"generated_html_url"}';
    public function __construct(public ?string $reason, public ?string $created_at, public ?string $html_url)
    {
    }
}
