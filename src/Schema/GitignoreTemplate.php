<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class GitignoreTemplate
{
    public const SCHEMA_JSON = '{"title":"Gitignore Template","required":["name","source"],"type":"object","properties":{"name":{"type":"string","examples":["C"]},"source":{"type":"string","examples":["# Object files\\n*.o\\n\\n# Libraries\\n*.lib\\n*.a\\n\\n# Shared objects (inc. Windows DLLs)\\n*.dll\\n*.so\\n*.so.*\\n*.dylib\\n\\n# Executables\\n*.exe\\n*.out\\n*.app\\n"]}},"description":"Gitignore Template"}';
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SCHEMA_DESCRIPTION = 'Gitignore Template';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"C","source":"# Object files\\n*.o\\n\\n# Libraries\\n*.lib\\n*.a\\n\\n# Shared objects (inc. Windows DLLs)\\n*.dll\\n*.so\\n*.so.*\\n*.dylib\\n\\n# Executables\\n*.exe\\n*.out\\n*.app\\n"}';
    public function __construct(public string $name, public string $source)
    {
    }
}
