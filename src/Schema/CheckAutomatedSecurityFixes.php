<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CheckAutomatedSecurityFixes
{
    public const SCHEMA_JSON         = '{"title":"Check Automated Security Fixes","required":["enabled","paused"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether automated security fixes are enabled for the repository.","examples":[true]},"paused":{"type":"boolean","description":"Whether automated security fixes are paused for the repository.","examples":[false]}},"description":"Check Automated Security Fixes"}';
    public const SCHEMA_TITLE        = 'Check Automated Security Fixes';
    public const SCHEMA_DESCRIPTION  = 'Check Automated Security Fixes';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":true,"paused":false}';

    /**
     * enabled: Whether automated security fixes are enabled for the repository.
     * paused: Whether automated security fixes are paused for the repository.
     */
    public function __construct(public bool $enabled, public bool $paused)
    {
    }
}
