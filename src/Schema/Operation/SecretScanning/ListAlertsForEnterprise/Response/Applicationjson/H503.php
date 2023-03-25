<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H503
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code_null","message":"generated_message_null","documentationUrl":"generated_documentation_url_null"}';
    public function __construct(public ?string $code, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
