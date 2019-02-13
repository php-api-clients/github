<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\RefsHandler")
 */
final class RefsCommand
{
    /** @var string */
    private $fullName;

    /** @var string|null */
    private $namespace;

    /**
     * @param string      $fullName
     * @param string|null $namespace
     */
    public function __construct(string $fullName, ?string $namespace)
    {
        $this->fullName = $fullName;
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }
}
