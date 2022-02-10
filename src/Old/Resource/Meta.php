<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyMeta")
 */
abstract class Meta extends AbstractResource implements MetaInterface
{
    protected bool $verifiable_password_authentication;

    protected string $github_services_sha;

    /** @var array */
    protected array $hooks;

    /** @var array */
    protected array $git;

    /** @var array */
    protected array $pages;

    /** @var array */
    protected array $importer;

    public function verifiablePasswordAuthentication(): bool
    {
        return $this->verifiable_password_authentication;
    }

    public function githubServicesSha(): string
    {
        return $this->github_services_sha;
    }

    /**
     * @return array
     */
    public function hooks(): array
    {
        return $this->hooks;
    }

    /**
     * @return array
     */
    public function git(): array
    {
        return $this->git;
    }

    /**
     * @return array
     */
    public function pages(): array
    {
        return $this->pages;
    }

    /**
     * @return array
     */
    public function importer(): array
    {
        return $this->importer;
    }
}
