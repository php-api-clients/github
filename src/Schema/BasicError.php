<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class BasicError
{
    public const SCHEMA_JSON = '{"title":"Basic Error","type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"url":{"type":"string"},"status":{"type":"string"}},"description":"Basic Error"}';
    public const SCHEMA_TITLE = 'Basic Error';
    public const SCHEMA_DESCRIPTION = 'Basic Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","documentation_url":"generated_documentation_url","url":"generated_url","status":"generated_status"}';
    public function __construct(public ?string $message, public ?string $documentation_url, public ?string $url, public ?string $status)
    {
    }
}
