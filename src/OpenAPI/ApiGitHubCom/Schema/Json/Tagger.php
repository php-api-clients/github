<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Tagger
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author of the tag"},"email":{"type":"string","description":"The email of the author of the tag"},"date":{"type":"string","description":"When this object was tagged. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"An object with information about the individual creating the tag."}';
    public const SCHEMA_TITLE = 'Json\\Tagger';
    public const SCHEMA_DESCRIPTION = 'An object with information about the individual creating the tag.';
    /**
     * The name of the author of the tag
     */
    public readonly string $name;
    /**
     * The email of the author of the tag
     */
    public readonly string $email;
    /**
     * When this object was tagged. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $date;
    public function __construct(string $name, string $email, string $date)
    {
        $this->name = $name;
        $this->email = $email;
        $this->date = $date;
    }
}
