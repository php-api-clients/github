<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
