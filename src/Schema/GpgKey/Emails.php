<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GpgKey;

final readonly class Emails
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated","verified":false}';

    public function __construct(public ?string $email, public ?bool $verified)
    {
    }
}
