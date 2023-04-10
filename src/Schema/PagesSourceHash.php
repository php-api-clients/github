<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class PagesSourceHash
{
    public const SCHEMA_JSON = '{"title":"Pages Source Hash","required":["branch","path"],"type":"object","properties":{"branch":{"type":"string"},"path":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"branch":"generated_branch_null","path":"generated_path_null"}';
    public function __construct(public string $branch, public string $path)
    {
    }
}
