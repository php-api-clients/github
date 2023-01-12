<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Committer
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"},"date":{"type":"string","description":"Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details."}';
    public const SCHEMA_TITLE = 'Json\\Committer';
    public const SCHEMA_DESCRIPTION = 'Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.';
    /**
     * The name of the author (or committer) of the commit
     */
    private string $name;
    /**
     * The email of the author (or committer) of the commit
     */
    private string $email;
    /**
     * Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $date;
    /**
     * The name of the author (or committer) of the commit
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The email of the author (or committer) of the commit
     */
    public function email() : string
    {
        return $this->email;
    }
    /**
     * Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function date() : string
    {
        return $this->date;
    }
}
