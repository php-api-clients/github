<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class BasicError
{
    public const SCHEMA_JSON = '{"title":"Basic Error","type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"url":{"type":"string"},"status":{"type":"string"}},"description":"Basic Error"}';
    public const SCHEMA_TITLE = 'Basic Error';
    public const SCHEMA_DESCRIPTION = 'Basic Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null","url":"generated_url_null","status":"generated_status_null"}';
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl, public ?string $url, public ?string $status)
    {
    }
}
