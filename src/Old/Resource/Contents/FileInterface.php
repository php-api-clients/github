<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\ResourceInterface;
use RuntimeException;

interface FileInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Contents\\File';

    public function type(): string;

    public function encoding(): string;

    public function size(): int;

    public function name(): string;

    public function path(): string;

    public function content(): string;

    /**
     * @throws RuntimeException When unknown encoding is encountered
     */
    public function decodedContent(): string;

    public function sha(): string;

    public function url(): string;

    public function gitUrl(): string;

    public function htmlUrl(): string;

    public function downloadUrl(): string;

    public function links(): Links;
}
