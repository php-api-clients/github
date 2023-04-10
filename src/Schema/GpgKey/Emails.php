<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\GpgKey;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Emails
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated_email_null","verified":false}';
    public function __construct(public ?string $email, public ?bool $verified)
    {
    }
}
