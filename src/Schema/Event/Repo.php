<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Event;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Repo
{
    public const SCHEMA_JSON = '{"required":["id","name","url"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","url":"generated_url"}';
    public function __construct(public ?int $id, public ?string $name, public ?string $url)
    {
    }
}
