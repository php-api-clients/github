<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ServiceUnavailable
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated","message":"generated","documentation_url":"generated"}';

    public function __construct(public string|null $code, public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl,)
    {
    }
}
