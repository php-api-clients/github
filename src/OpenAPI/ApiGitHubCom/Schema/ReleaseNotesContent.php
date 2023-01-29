<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReleaseNotesContent
{
    public const SCHEMA_JSON = '{"title":"Generated Release Notes Content","required":["name","body"],"type":"object","properties":{"name":{"type":"string","description":"The generated name of the release","examples":["Release v1.0.0 is now available!"]},"body":{"type":"string","description":"The generated body describing the contents of the release supporting markdown formatting"}},"description":"Generated name and body describing a release"}';
    public const SCHEMA_TITLE = 'Generated Release Notes Content';
    public const SCHEMA_DESCRIPTION = 'Generated name and body describing a release';
    /**
     * The generated name of the release
     */
    public readonly string $name;
    /**
     * The generated body describing the contents of the release supporting markdown formatting
     */
    public readonly string $body;
    public function __construct(string $name, string $body)
    {
        $this->name = $name;
        $this->body = $body;
    }
}
