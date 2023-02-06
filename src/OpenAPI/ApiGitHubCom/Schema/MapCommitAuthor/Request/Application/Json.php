<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MapCommitAuthor\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string","description":"The new Git author email."},"name":{"type":"string","description":"The new Git author name."}},"additionalProperties":false}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'MapCommitAuthor\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new Git author email.
     */
    public readonly string $email;
    /**
     * The new Git author name.
     */
    public readonly string $name;
    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
    }
}
