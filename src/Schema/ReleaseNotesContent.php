<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ReleaseNotesContent
{
    public const SCHEMA_JSON = '{"title":"Generated Release Notes Content","required":["name","body"],"type":"object","properties":{"name":{"type":"string","description":"The generated name of the release","examples":["Release v1.0.0 is now available!"]},"body":{"type":"string","description":"The generated body describing the contents of the release supporting markdown formatting"}},"description":"Generated name and body describing a release"}';
    public const SCHEMA_TITLE = 'Generated Release Notes Content';
    public const SCHEMA_DESCRIPTION = 'Generated name and body describing a release';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Release v1.0.0 is now available!","body":"generated_body_null"}';
    /**
     * name: The generated name of the release
     * body: The generated body describing the contents of the release supporting markdown formatting
     */
    public function __construct(public string $name, public string $body)
    {
    }
}
