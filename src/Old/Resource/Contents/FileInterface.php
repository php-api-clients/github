<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\ResourceInterface;
use RuntimeException;

interface FileInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Contents\\File';

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return string
     */
    public function encoding(): string;

    /**
     * @return int
     */
    public function size(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function path(): string;

    /**
     * @return string
     */
    public function content(): string;

    /**
     * @throws RuntimeException When unknown encoding is encountered
     * @return string
     */
    public function decodedContent(): string;

    /**
     * @return string
     */
    public function sha(): string;

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function gitUrl(): string;

    /**
     * @return string
     */
    public function htmlUrl(): string;

    /**
     * @return string
     */
    public function downloadUrl(): string;

    /**
     * @return Links
     */
    public function links(): Links;
}
