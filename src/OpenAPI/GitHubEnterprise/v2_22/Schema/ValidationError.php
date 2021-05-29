<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\ValidationError\Errors;

final class ValidationError
{
    public const SCHEMA_TITLE          = 'Validation Error';
    public const SCHEMA_DESCRIPTION    = 'Validation Error';
    private ?string $message           = null;
    private ?string $documentation_url = null;
    private array $errors              = [];

    public function message(): ?string
    {
        return $this->message;
    }

    public function documentation_url(): ?string
    {
        return $this->documentation_url;
    }

    /**
     * @return array<Errors>
     */
    public function errors(): array
    {
        return $this->errors;
    }
}
