<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ServiceUnavailable
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated","message":"generated","documentation_url":"generated","errors":[{"code":"generated","message":"generated"},{"code":"generated","message":"generated"}]}';

    public function __construct(public ?string $code, public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl, public ?array $errors)
    {
    }
}
