<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError\Errors;

final class ValidationError
{
    public const SCHEMA_TITLE          = 'Validation Error';
    public const SCHEMA_DESCRIPTION    = 'Validation Error';
    private ?string $message           = null;
    private ?string $documentation_url = null;
    /**
     * @var array<Errors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError\Errors::class)
     */
    private array $errors = [];

    public function message(): ?string
    {
        return $this->message;
    }

    public function documentation_url(): ?string
    {
        return $this->documentation_url;
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
