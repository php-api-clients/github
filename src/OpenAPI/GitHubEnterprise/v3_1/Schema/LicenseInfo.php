<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class LicenseInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"seats":{"oneOf":[{"type":"string"},{"type":"integer"}]},"seats_used":{"type":"integer"},"seats_available":{"oneOf":[{"type":"string"},{"type":"integer"}]},"kind":{"type":"string"},"days_until_expiration":{"type":"integer"},"expire_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'license-info';
    public const SCHEMA_DESCRIPTION = '';
    private $seats;
    private int $seats_used;
    private $seats_available;
    private string $kind;
    private int $days_until_expiration;
    private string $expire_at;
    public function seats()
    {
        return $this->seats;
    }
    public function seats_used() : int
    {
        return $this->seats_used;
    }
    public function seats_available()
    {
        return $this->seats_available;
    }
    public function kind() : string
    {
        return $this->kind;
    }
    public function days_until_expiration() : int
    {
        return $this->days_until_expiration;
    }
    public function expire_at() : string
    {
        return $this->expire_at;
    }
}
