<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class H503
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code_null","message":"generated_message_null","documentation_url":"generated_documentation_url_null"}';

    public function __construct(public ?string $code, public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
