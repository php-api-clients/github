<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Runner
{
    public const SCHEMA_TITLE       = 'Self hosted runners';
    public const SCHEMA_DESCRIPTION = 'A self hosted runner';
    /**
     * The id of the runner.
     */
    private ?int $id = null;
    /**
     * The name of the runner.
     */
    private ?string $name = null;
    /**
     * The Operating System of the runner.
     */
    private ?string $os = null;
    /**
     * The status of the runner.
     */
    private ?string $status = null;
    private ?bool $busy     = null;
    private array $labels   = [];

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function os(): ?string
    {
        return $this->os;
    }

    public function status(): ?string
    {
        return $this->status;
    }

    public function busy(): ?bool
    {
        return $this->busy;
    }

    public function labels(): array
    {
        return $this->labels;
    }
}
