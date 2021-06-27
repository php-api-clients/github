<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\AddLabelHandler")
 */
final class AddLabelCommand
{
    private string $repository;

    private string $name;

    private string $colour;

    public function __construct(string $repository, string $name, string $colour)
    {
        $this->repository = $repository;
        $this->name       = $name;
        $this->colour     = $colour;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColour(): string
    {
        return $this->colour;
    }
}
