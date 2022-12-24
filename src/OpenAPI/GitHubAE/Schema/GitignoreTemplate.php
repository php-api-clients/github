<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_JSON = '{"title":"Gitignore Template","required":["name","source"],"type":"object","properties":{"name":{"type":"string","examples":["C"]},"source":{"type":"string","examples":["# Object files\\n*.o\\n\\n# Libraries\\n*.lib\\n*.a\\n\\n# Shared objects (inc. Windows DLLs)\\n*.dll\\n*.so\\n*.so.*\\n*.dylib\\n\\n# Executables\\n*.exe\\n*.out\\n*.app\\n"]}},"description":"Gitignore Template"}';
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SCHEMA_DESCRIPTION = 'Gitignore Template';
    private string $name;
    private string $source;
    public function name() : string
    {
        return $this->name;
    }
    public function source() : string
    {
        return $this->source;
    }
}
