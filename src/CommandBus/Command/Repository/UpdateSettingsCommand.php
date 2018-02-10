<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\UpdateSettingsHandler")
 */
final class UpdateSettingsCommand
{
    /**
     * @var string
     */
    private $repository;

    /**
     * @var array
     */
    private $settings = [];

    /**
     * @param string $repository
     * @param array  $settings
     */
    public function __construct(string $repository, array $settings)
    {
        $this->repository = $repository;
        $this->settings = $settings;
    }

    /**
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * @return array
     */
    public function getSettings(): array
    {
        return $this->settings;
    }
}
