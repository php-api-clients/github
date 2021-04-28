<?php declare(strict_types=1);

namespace ApiClients\Client\Github\VO;

use React\Stream\ReadableStreamInterface;

final class NamedBlob
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string|null
     */
    private $sha;

    /**
     * @var ReadableStreamInterface|null
     */
    private $content;

    /**
     * @param  string                       $path
     * @param  string                       $mode
     * @param  string                       $type
     * @param  string|null                  $sha
     * @param  ReadableStreamInterface|null $content
     * @throws \Exception
     */
    public function __construct(string $path, string $mode, string $type, ?string $sha, ?ReadableStreamInterface $content)
    {
        $this->path = $path;
        $this->mode = $mode;
        $this->type = $type;
        $this->sha = $sha;
        $this->content = $content;

        if ($this->sha === null && $this->content === null) {
            throw new \Exception('Only `sha` or `content` can be `null` not both');
        }
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getSha(): ?string
    {
        return $this->sha;
    }

    /**
     * @return ReadableStreamInterface|null
     */
    public function getContent(): ?ReadableStreamInterface
    {
        return $this->content;
    }
}
