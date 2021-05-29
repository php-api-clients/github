<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CheckRunDeployment
{
    public const SCHEMA_TITLE             = 'Check Run Deployment';
    public const SCHEMA_DESCRIPTION       = 'A deployment to a repository environment. This will only be populated if the check run was created by a GitHub Actions workflow job that references an environment.';
    private ?string $url                  = null;
    private ?int $id                      = null;
    private ?string $node_id              = null;
    private ?string $task                 = null;
    private ?string $original_environment = null;
    private ?string $environment          = null;
    private $description;
    private ?string $created_at     = null;
    private ?string $updated_at     = null;
    private ?string $statuses_url   = null;
    private ?string $repository_url = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function task(): ?string
    {
        return $this->task;
    }

    public function original_environment(): ?string
    {
        return $this->original_environment;
    }

    public function environment(): ?string
    {
        return $this->environment;
    }

    public function description()
    {
        return $this->description;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function statuses_url(): ?string
    {
        return $this->statuses_url;
    }

    public function repository_url(): ?string
    {
        return $this->repository_url;
    }
}
