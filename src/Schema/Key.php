<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Key
{
    public const SCHEMA_JSON = '{"title":"Key","required":["key","id","url","title","created_at","verified","read_only"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"url":{"type":"string"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"verified":{"type":"boolean"},"read_only":{"type":"boolean"}},"description":"Key"}';
    public const SCHEMA_TITLE = 'Key';
    public const SCHEMA_DESCRIPTION = 'Key';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key_null","id":13,"url":"generated_url_null","title":"generated_title_null","created_at":"1970-01-01T00:00:00+00:00","verified":false,"read_only":false}';
    public function __construct(public string $key, public int $id, public string $url, public string $title, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public bool $verified, #[\EventSauce\ObjectHydrator\MapFrom('read_only')] public bool $readOnly)
    {
    }
}
