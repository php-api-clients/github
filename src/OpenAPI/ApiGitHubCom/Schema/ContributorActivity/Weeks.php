<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContributorActivity;

final class Weeks
{
    public const SCHEMA_TITLE       = 'contributor-activity::weeks';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $w                 = null;
    private ?int $a                 = null;
    private ?int $d                 = null;
    private ?int $c                 = null;

    public function w(): ?int
    {
        return $this->w;
    }

    public function a(): ?int
    {
        return $this->a;
    }

    public function d(): ?int
    {
        return $this->d;
    }

    public function c(): ?int
    {
        return $this->c;
    }
}
