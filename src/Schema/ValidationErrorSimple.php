<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ValidationErrorSimple
{
    public const SCHEMA_JSON = '{"title":"Validation Error Simple","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}},"description":"Validation Error Simple"}';
    public const SCHEMA_TITLE = 'Validation Error Simple';
    public const SCHEMA_DESCRIPTION = 'Validation Error Simple';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null","errors":["generated_errors_null"]}';
    /**
     * @param ?array<string> $errors
     */
    public function __construct(public string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public string $documentationUrl, public ?array $errors)
    {
    }
}
