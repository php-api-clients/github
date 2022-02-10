<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class SecurityAdvisoryEvent
{
    public const SCHEMA_TITLE = 'security_advisory_event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The details of the security advisory, including summary, description, and severity.
     */
    private array $security_advisory = array();
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The details of the security advisory, including summary, description, and severity.
     */
    public function security_advisory() : array
    {
        return $this->security_advisory;
    }
}
