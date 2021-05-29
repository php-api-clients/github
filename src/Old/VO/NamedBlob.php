<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\VO;

use Exception;
use React\Stream\ReadableStreamInterface;

final class NamedBlob
{
    private string $path;

    private string $mode;

    private string $type;

    private ?string $sha = null;

    private ?ReadableStreamInterface $content = null;

    /**
     * @throws Exception
     */
    public function __construct(string $path, string $mode, string $type, ?string $sha, ?ReadableStreamInterface $content)
    {
        $this->path    = $path;
        $this->mode    = $mode;
        $this->type    = $type;
        $this->sha     = $sha;
        $this->content = $content;

        if ($this->sha === null && $this->content === null) {
            throw new Exception('Only `sha` or `content` can be `null` not both');
        }
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getSha(): ?string
    {
        return $this->sha;
    }

    public function getContent(): ?ReadableStreamInterface
    {
        return $this->content;
    }
}
