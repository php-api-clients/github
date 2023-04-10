<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\GpgKey;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
