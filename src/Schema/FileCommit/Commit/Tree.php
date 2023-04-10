<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\FileCommit\Commit;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
