<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class RunnerNoLabels
{
    public const SCHEMA_TITLE       = 'runner-no-labels';
    public const SCHEMA_DESCRIPTION = '';
    private ?number $id             = null;
    private ?string $name           = null;
    private ?string $os             = null;
    private ?string $status         = null;
    private ?bool $busy             = null;

    public function id(): ?number
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
}
