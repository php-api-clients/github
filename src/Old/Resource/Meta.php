<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyMeta")
 */
abstract class Meta extends AbstractResource implements MetaInterface
{
    /**
     * @var bool
     */
    protected $verifiable_password_authentication;

    /**
     * @var string
     */
    protected $github_services_sha;

    /**
     * @var array
     */
    protected $hooks;

    /**
     * @var array
     */
    protected $git;

    /**
     * @var array
     */
    protected $pages;

    /**
     * @var array
     */
    protected $importer;

    /**
     * @return bool
     */
    public function verifiablePasswordAuthentication(): bool
    {
        return $this->verifiable_password_authentication;
    }

    /**
     * @return string
     */
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
