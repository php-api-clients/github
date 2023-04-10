<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Tree
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null","sha":"generated_sha_null"}';
    public function __construct(public ?string $url, public ?string $sha)
    {
    }
}
