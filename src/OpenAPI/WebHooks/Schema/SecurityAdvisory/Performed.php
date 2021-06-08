<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\SecurityAdvisory;

final class Performed
{
    public const SCHEMA_TITLE       = 'security_advisory performed event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The details of the security advisory, including summary, description, and severity.
     */
    private array $security_advisory = [];

    public function action(): string
    {
        return $this->action;
    }

    /**
     * The details of the security advisory, including summary, description, and severity.
     */
    public function security_advisory(): array
    {
        return $this->security_advisory;
    }
}
