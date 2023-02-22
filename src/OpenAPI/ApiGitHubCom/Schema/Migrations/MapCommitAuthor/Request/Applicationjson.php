<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migrations\MapCommitAuthor\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string","description":"The new Git author email."},"name":{"type":"string","description":"The new Git author name."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new Git author email.
     */
    public ?string $email;
    /**
     * The new Git author name.
     */
    public ?string $name;
    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
    }
}
