<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Event;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Repo
{
    public const SCHEMA_JSON = '{"required":["id","name","url"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(public int $id, public string $name, public string $url)
    {
    }
}
