<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class PreReceiveHook
{
    public const SCHEMA_TITLE                     = 'pre-receive-hook';
    public const SCHEMA_DESCRIPTION               = '';
    private ?int $id                              = null;
    private ?string $name                         = null;
    private ?string $enforcement                  = null;
    private ?string $script                       = null;
    private array $script_repository              = [];
    private array $environment                    = [];
    private ?bool $allow_downstream_configuration = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function enforcement(): ?string
    {
        return $this->enforcement;
    }

    public function script(): ?string
    {
        return $this->script;
    }

    public function script_repository(): array
    {
        return $this->script_repository;
    }

    public function environment(): array
    {
        return $this->environment;
    }

    public function allow_downstream_configuration(): ?bool
    {
        return $this->allow_downstream_configuration;
    }
}
