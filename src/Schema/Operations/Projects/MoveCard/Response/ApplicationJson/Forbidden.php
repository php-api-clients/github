<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Forbidden
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"resource":{"type":"string"},"field":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated","errors":[{"code":"generated","message":"generated","resource":"generated","field":"generated"},{"code":"generated","message":"generated","resource":"generated","field":"generated"}]}';

    public function __construct(public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl, public ?array $errors)
    {
    }
}
