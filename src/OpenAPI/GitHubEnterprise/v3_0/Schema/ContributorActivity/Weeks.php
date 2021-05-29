<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\ContributorActivity;

final class Weeks
{
    public const SCHEMA_TITLE       = 'contributor-activity::weeks';
    public const SCHEMA_DESCRIPTION = '';
    private int $w;
    private int $a;
    private int $d;
    private int $c;

    public function w(): int
    {
        return $this->w;
    }

    public function a(): int
    {
        return $this->a;
    }

    public function d(): int
    {
        return $this->d;
    }

    public function c(): int
    {
        return $this->c;
    }
}
