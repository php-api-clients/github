<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Status_Event;

final class Branches
{
    public const SCHEMA_TITLE       = 'status$event::branches';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $name           = null;
    private array $commit           = [];
    private ?bool $protected        = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function commit(): array
    {
        return $this->commit;
    }

    public function protected(): ?bool
    {
        return $this->protected;
    }
}
