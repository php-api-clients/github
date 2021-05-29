<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Hovercard;

final class Contexts
{
    public const SCHEMA_TITLE       = 'hovercard::contexts';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $message        = null;
    private ?string $octicon        = null;

    public function message(): ?string
    {
        return $this->message;
    }

    public function octicon(): ?string
    {
        return $this->octicon;
    }
}
