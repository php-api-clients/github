<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PageBuild_Event
{
    public const SCHEMA_TITLE       = 'page_build event';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    private ?int $id                = null;
    /**
     * The [List GitHub Pages builds](https://docs.github.com/en/rest/reference/repos#list-github-pages-builds) itself.
     */
    private array $build = [];
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function build(): array
    {
        return $this->build;
    }

    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }

    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }
}
