<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CAcc5C4B53878399C87398F2E64543523;

final class Tagger
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author of the tag"},"email":{"type":"string","description":"The email of the author of the tag"},"date":{"type":"string","description":"When this object was tagged. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"An object with information about the individual creating the tag."}';
    public const SCHEMA_TITLE = 'CAcc5C4B53878399C87398F2E64543523\\Tagger';
    public const SCHEMA_DESCRIPTION = 'An object with information about the individual creating the tag.';
    /**
     * The name of the author of the tag
     */
    private string $name;
    /**
     * The email of the author of the tag
     */
    private string $email;
    /**
     * When this object was tagged. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $date = null;
    /**
     * The name of the author of the tag
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The email of the author of the tag
     */
    public function email() : string
    {
        return $this->email;
    }
    /**
     * When this object was tagged. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function date() : ?string
    {
        return $this->date;
    }
}
