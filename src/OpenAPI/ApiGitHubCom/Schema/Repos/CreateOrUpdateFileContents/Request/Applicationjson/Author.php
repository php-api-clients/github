<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\CreateOrUpdateFileContents\Request\Applicationjson;

final readonly class Author
{
    public const SCHEMA_JSON        = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-15T17:13:22+05:00\\""]}},"description":"The author of the file. Default: The `committer` or the authenticated user if you omit `committer`."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.';
    /**
     * The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     */
    public ?string $name;
    /**
     * The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     */
    public ?string $email;
    public string $date;

    public function __construct(string $name, string $email, string $date)
    {
        $this->name  = $name;
        $this->email = $email;
        $this->date  = $date;
    }
}
