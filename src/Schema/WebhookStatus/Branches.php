<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookStatus;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Branches
{
    public const SCHEMA_JSON = '{"required":["name","commit","protected"],"type":"object","properties":{"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}},"name":{"type":"string"},"protected":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit":{"sha":"generated_sha","url":"generated_url"},"name":"generated_name","protected":false}';
    public function __construct(public Schema\WebhookStatus\Branches\Commit $commit, public string $name, public bool $protected)
    {
    }
}
