<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner;

final class Labels
{
    public const SCHEMA_TITLE = 'runner::labels';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Unique identifier of the label.
     */
    private int $id;
    /**
     * Name of the label.
     */
    private string $name;
    /**
     * The type of label. Read-only labels are applied automatically when the runner is configured.
     */
    private string $type;
    /**
     * Unique identifier of the label.
     */
    public function id() : int
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
    public function type() : string
    {
        return $this->type;
    }
}
