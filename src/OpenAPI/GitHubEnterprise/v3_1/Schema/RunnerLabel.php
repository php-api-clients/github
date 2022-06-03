<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class RunnerLabel
{
    public const SCHEMA_TITLE = 'Self hosted runner label';
    public const SCHEMA_DESCRIPTION = 'A label for a self hosted runner';
    /**
     * Unique identifier of the label.
     */
    private ?int $id = null;
    /**
     * Name of the label.
     */
    private string $name;
    /**
     * The type of label. Read-only labels are applied automatically when the runner is configured.
     */
    private ?string $type = null;
    /**
     * Unique identifier of the label.
     */
    public function id() : ?int
    {
        return $this->id;
    }
    /**
     * Name of the label.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The type of label. Read-only labels are applied automatically when the runner is configured.
     */
    public function type() : ?string
    {
        return $this->type;
    }
}
