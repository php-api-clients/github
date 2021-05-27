<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class LicenseInfo
{
    public const SCHEMA_TITLE = 'license-info';
    public const SCHEMA_DESCRIPTION = '';
    private $seats;
    private ?int $seats_used = null;
    private $seats_available;
    private ?string $kind = null;
    private ?int $days_until_expiration = null;
    private ?string $expire_at = null;
    public function seats()
    {
        return $this->seats;
    }
    public function seats_used() : ?int
    {
        return $this->seats_used;
    }
    public function seats_available()
    {
        return $this->seats_available;
    }
    public function kind() : ?string
    {
        return $this->kind;
    }
    public function days_until_expiration() : ?int
    {
        return $this->days_until_expiration;
    }
    public function expire_at() : ?string
    {
        return $this->expire_at;
    }
}
