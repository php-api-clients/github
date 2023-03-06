<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Verification
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"verified":false,"reason":"generated_reason","signature":"generated_signature","payload":"generated_payload"}';
    public function __construct(public ?bool $verified, public ?string $reason, public ?string $signature, public ?string $payload)
    {
    }
}
