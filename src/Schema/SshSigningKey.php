<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SshSigningKey
{
    public const SCHEMA_JSON = '{"title":"SSH Signing Key","required":["key","id","title","created_at"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"}},"description":"A public SSH key used to sign Git commits"}';
    public const SCHEMA_TITLE = 'SSH Signing Key';
    public const SCHEMA_DESCRIPTION = 'A public SSH key used to sign Git commits';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key_null","id":13,"title":"generated_title_null","created_at":"1970-01-01T00:00:00+00:00"}';
    public function __construct(public string $key, public int $id, public string $title, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt)
    {
    }
}
