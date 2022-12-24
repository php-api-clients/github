<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C3D19Ba8102F0C0E8446Bf877304Dda3E
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string","description":"The new Git author email."},"name":{"type":"string","description":"The new Git author name."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_3d19ba8102f0c0e8446bf877304dda3e';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new Git author email.
     */
    private string $email;
    /**
     * The new Git author name.
     */
    private string $name;
    /**
     * The new Git author email.
     */
    public function email() : string
    {
        return $this->email;
    }
    /**
     * The new Git author name.
     */
    public function name() : string
    {
        return $this->name;
    }
}
