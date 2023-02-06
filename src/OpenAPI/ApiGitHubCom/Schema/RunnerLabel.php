<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RunnerLabel
{
    public const SCHEMA_JSON = '{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Self hosted runner label';
    public const SCHEMA_DESCRIPTION = 'A label for a self hosted runner';
    /**
     * Unique identifier of the label.
     */
    public readonly ?int $id;
    /**
     * Name of the label.
     */
    public readonly string $name;
    /**
     * The type of label. Read-only labels are applied automatically when the runner is configured.
     */
    public readonly ?string $type;
    public function __construct(int $id, string $name, string $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
    }
}
