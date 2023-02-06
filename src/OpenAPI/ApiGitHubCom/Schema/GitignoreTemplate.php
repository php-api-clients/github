<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_JSON = '{"title":"Gitignore Template","required":["name","source"],"type":"object","properties":{"name":{"type":"string","examples":["C"]},"source":{"type":"string","examples":["# Object files\\n*.o\\n\\n# Libraries\\n*.lib\\n*.a\\n\\n# Shared objects (inc. Windows DLLs)\\n*.dll\\n*.so\\n*.so.*\\n*.dylib\\n\\n# Executables\\n*.exe\\n*.out\\n*.app\\n"]}},"description":"Gitignore Template"}';
    public const SCHEMA_EXAMPLE = '{"name":"C","source":"# Object files\\n*.o\\n\\n# Libraries\\n*.lib\\n*.a\\n\\n# Shared objects (inc. Windows DLLs)\\n*.dll\\n*.so\\n*.so.*\\n*.dylib\\n\\n# Executables\\n*.exe\\n*.out\\n*.app\\n"}';
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SCHEMA_DESCRIPTION = 'Gitignore Template';
    public readonly string $name;
    public readonly string $source;
    public function __construct(string $name, string $source)
    {
        $this->name = $name;
        $this->source = $source;
    }
}
