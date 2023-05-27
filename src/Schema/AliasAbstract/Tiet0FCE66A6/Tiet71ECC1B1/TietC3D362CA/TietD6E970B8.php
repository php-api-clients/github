<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet0FCE66A6\Tiet71ECC1B1\TietC3D362CA;

abstract readonly class TietD6E970B8
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated","verified":false}';

    public function __construct(public ?string $email, public ?bool $verified)
    {
    }
}
