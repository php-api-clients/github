<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository\Contents;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\Contents\FileDeleteHandler")
 */
final class FileDeleteCommand
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
     * @param string $repository
     * @param string $commitMessage
     * @param string $url
     * @param string $sha
     * @param string $branch
     */
    public function __construct(string $repository, string $commitMessage, string $url, string $sha, string $branch = '')
    {
        $this->repository = $repository;
        $this->commitMessage = $commitMessage;
        $this->url = $url;
        $this->sha = $sha;
        $this->branch = $branch;
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
}
