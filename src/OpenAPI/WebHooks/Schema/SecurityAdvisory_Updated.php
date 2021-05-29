<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class SecurityAdvisory_Updated
{
    public const SCHEMA_TITLE       = 'security_advisory updated event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The details of the security advisory, including summary, description, and severity.
     */
    private array $security_advisory = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function security_advisory(): array
    {
        return $this->security_advisory;
    }
}
