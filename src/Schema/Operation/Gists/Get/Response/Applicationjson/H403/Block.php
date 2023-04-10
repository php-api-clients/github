<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Gists\Get\Response\Applicationjson\H403;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reason":"generated_reason_null","created_at":"generated_created_at_null","html_url":"generated_html_url_null"}';
    public function __construct(public ?string $reason, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
