<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class BasicError
{
    public const SCHEMA_TITLE          = 'Basic Error';
    public const SCHEMA_DESCRIPTION    = 'Basic Error';
    private ?string $message           = null;
    private ?string $documentation_url = null;
    private ?string $url               = null;
    private ?string $status            = null;

    public function message(): ?string
    {
        return $this->message;
    }

    public function documentation_url(): ?string
    {
        return $this->documentation_url;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function status(): ?string
    {
        return $this->status;
    }
}
