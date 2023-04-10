<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
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
