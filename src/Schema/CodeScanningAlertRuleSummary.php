<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAlertRuleSummary
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id","name":"generated_name","tags":["generated_tags"],"severity":"generated_severity","description":"generated_description"}';
    /**
     * id: A unique identifier for the rule used to detect the alert.
     * name: The name of the rule used to detect the alert.
     * tags: A set of tags applicable for the rule.
     * @param ?array<string> $tags
     * severity: The severity of the alert.
     * description: A short description of the rule used to detect the alert.
     */
    public function __construct(public ?string $id, public ?string $name, public ?array $tags, public ?string $severity, public ?string $description)
    {
    }
}
