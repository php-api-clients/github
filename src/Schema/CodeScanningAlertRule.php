<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAlertRule
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"security_severity_level":{"enum":["low","medium","high","critical",null],"type":["string","null"],"description":"The security severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string","description":"description of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"help":{"type":["string","null"],"description":"Detailed documentation for the rule as GitHub Flavored Markdown."},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id","name":"generated_name","severity":"generated_severity","security_severity_level":"generated_security_severity_level","description":"generated_description","full_description":"generated_full_description","tags":["generated_tags"],"help":"generated_help","help_uri":"generated_help_uri"}';
    /**
     * id: A unique identifier for the rule used to detect the alert.
     * name: The name of the rule used to detect the alert.
     * severity: The severity of the alert.
     * security_severity_level: The security severity of the alert.
     * description: A short description of the rule used to detect the alert.
     * full_description: description of the rule used to detect the alert.
     * tags: A set of tags applicable for the rule.
     * @param ?array<string> $tags
     * help: Detailed documentation for the rule as GitHub Flavored Markdown.
     * help_uri: A link to the documentation for the rule used to detect the alert.
     */
    public function __construct(public ?string $id, public ?string $name, public ?string $severity, public ?string $security_severity_level, public ?string $description, public ?string $full_description, public ?array $tags, public ?string $help, public ?string $help_uri)
    {
    }
}
