<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class LicenseInfo
{
    public const SCHEMA_TITLE = 'license-info';
    public const SPL_HASH = '000000006312f7240000000044ad25fc';
    public const SCHEMA_DESCRIPTION = '';
    private int $seats;
    private int $seats_used;
    private int $seats_available;
    private string $kind;
    private int $days_until_expiration;
    private string $expire_at;
    public function seats() : int
    {
        return $this->seats;
    }
    public function seats_used() : int
    {
        return $this->seats_used;
    }
    public function seats_available() : int
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
