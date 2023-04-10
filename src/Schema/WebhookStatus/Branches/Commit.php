<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookStatus\Branches;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Commit
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(public ?string $sha, public ?string $url)
    {
    }
}
