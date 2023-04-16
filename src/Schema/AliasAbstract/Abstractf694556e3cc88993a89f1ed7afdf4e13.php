<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstractf694556e3cc88993a89f1ed7afdf4e13
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","documentation_url":"generated_documentation_url_null","errors":["generated_errors_null"]}';

    /**
     * @param ?array<string> $errors
     */
    public function __construct(public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl, public ?array $errors)
    {
    }
}
