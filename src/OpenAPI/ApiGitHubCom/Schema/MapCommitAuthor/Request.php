<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MapCommitAuthor;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string","description":"The new Git author email."},"name":{"type":"string","description":"The new Git author name."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'MapCommitAuthor\\Request';
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
