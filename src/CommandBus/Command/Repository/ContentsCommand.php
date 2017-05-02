<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\ContentsHandler")
 */
final class ContentsCommand
{
    /**
     * @var string
     */
    private $fullname;

    /**
     * @var string
     */
    private $path;

    /**
     * ContentsCommand constructor.
     * @param string $fullname
     * @param string $path
     */
    public function __construct($fullname, $path)
    {
        $this->fullname = $fullname;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getFullname(): string
    {
        return $this->fullname;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
