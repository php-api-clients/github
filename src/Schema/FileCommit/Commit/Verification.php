<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

final readonly class Verification
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"verified":false,"reason":"generated","signature":"generated","payload":"generated"}';

    public function __construct(public bool|null $verified, public string|null $reason, public string|null $signature, public string|null $payload)
    {
    }
}
