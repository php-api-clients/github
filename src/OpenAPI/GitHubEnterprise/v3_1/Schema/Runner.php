<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner\Labels;

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

    /**
     * The id of the runner.
     */
    public function id(): ?int
    {
        return $this->id;
    }

    /**
     * The name of the runner.
     */
    public function name(): ?string
    {
        return $this->name;
    }

    /**
     * The Operating System of the runner.
     */
    public function os(): ?string
    {
        return $this->os;
    }

    /**
     * The status of the runner.
     */
    public function status(): ?string
    {
        return $this->status;
    }

    public function busy(): ?bool
    {
        return $this->busy;
    }

    /**
     * @return array<Labels>
     */
    public function labels(): array
    {
        return $this->labels;
    }
}
