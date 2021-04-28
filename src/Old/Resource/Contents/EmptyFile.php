<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use RuntimeException;

abstract class EmptyFile implements FileInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function type(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function encoding(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function size(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function path(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function content(): string
    {
        return null;
    }

    /**
     * @throws RuntimeException
     * @return string
     */
    public function decodedContent(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function gitUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function downloadUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function repositoryFullname(): string
    {
        return null;
    }

    /**
     * @return Links
     */
    public function links(): Links
    {
        return null;
    }
}
