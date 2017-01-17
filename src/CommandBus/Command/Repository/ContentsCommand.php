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
     * @param string $fullname
     */
    public function __construct(string $fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return string
     */
    public function getFullname(): string
    {
        return $this->fullname;
    }
}
