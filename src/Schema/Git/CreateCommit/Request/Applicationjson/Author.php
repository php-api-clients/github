<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Git\CreateCommit\Request\Applicationjson;

final readonly class Author
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"},"date":{"type":"string","description":"Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details.';
    /**
     * The name of the author (or committer) of the commit
     */
    public ?string $name;
    /**
     * The email of the author (or committer) of the commit
     */
    public ?string $email;
    /**
     * Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public string $date;
    public function __construct(string $name, string $email, string $date)
    {
        $this->name = $name;
        $this->email = $email;
        $this->date = $date;
    }
}
