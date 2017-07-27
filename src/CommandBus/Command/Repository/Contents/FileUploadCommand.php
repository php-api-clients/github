<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository\Contents;

use React\Stream\ReadableStreamInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\Contents\FileUploadHandler")
 */
final class FileUploadCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @var string
     */
    private $commitMessage;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $sha;

    /**
     * @var string
     */
    private $branch;

    /**
     * @var ReadableStreamInterface
     */
    private $stream;

    /**
     * FileUploadCommand constructor.
     * @param string                  $repository
     * @param string                  $commitMessage
     * @param string                  $url
     * @param string                  $sha
     * @param string                  $branch
     * @param ReadableStreamInterface $stream
     */
    public function __construct(string $repository, string $commitMessage, string $url, string $sha, string $branch, ReadableStreamInterface $stream)
    {
        $this->repository = $repository;
        $this->commitMessage = $commitMessage;
        $this->url = $url;
        $this->sha = $sha;
        $this->branch = $branch;
        $this->stream = $stream;
    }

    /**
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * @return string
     */
    public function getCommitMessage(): string
    {
        return $this->commitMessage;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getSha(): string
    {
        return $this->sha;
    }

    /**
     * @return string
     */
    public function getBranch(): string
    {
        return $this->branch;
    }

    /**
     * @return ReadableStreamInterface
     */
    public function getStream(): ReadableStreamInterface
    {
        return $this->stream;
    }
}
