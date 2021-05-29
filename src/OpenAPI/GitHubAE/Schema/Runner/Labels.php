<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Runner;

final class Labels
{
    public const SCHEMA_TITLE       = 'runner::labels';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Unique identifier of the label.
     */
    private ?int $id = null;
    /**
     * Name of the label.
     */
    private ?string $name = null;
    /**
     * The type of label. Read-only labels are applied automatically when the runner is configured.
     */
    private ?string $type = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function type(): ?string
    {
        return $this->type;
    }
}
