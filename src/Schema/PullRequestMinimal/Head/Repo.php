<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Repo
{
    public const SCHEMA_JSON = '{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"url":"generated_url","name":"generated_name"}';
    public function __construct(public int $id, public string $url, public string $name)
    {
    }
}
