<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\AddLabelHandler")
 */
final class AddLabelCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $colour;

    /**
     * @param string $repository
     * @param string $name
     * @param string $colour
     */
    public function __construct(string $repository, string $name, string $colour)
    {
        $this->repository = $repository;
        $this->name = $name;
        $this->colour = $colour;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }
}
