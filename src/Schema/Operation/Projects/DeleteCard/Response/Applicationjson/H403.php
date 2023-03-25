<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Projects\DeleteCard\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentationUrl":"generated_documentation_url_null","errors":["generated_errors_null"]}';
    /**
     * @param ?array<string> $errors
     */
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl, public ?array $errors)
    {
    }
}
