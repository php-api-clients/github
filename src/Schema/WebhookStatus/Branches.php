<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookStatus;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Branches
{
    public const SCHEMA_JSON = '{"required":["name","commit","protected"],"type":"object","properties":{"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}},"name":{"type":"string"},"protected":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit":{"sha":"generated_sha_null","url":"https:\\/\\/example.com\\/"},"name":"generated_name_null","protected":false}';
    public function __construct(public Schema\WebhookStatus\Branches\Commit $commit, public string $name, public bool $protected)
    {
    }
}
