<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\OrganizationHandler")
 */
final class OrganizationCommand
{
    /**
     * @var string
     */
    private $organization;

    /**
     * @param string $organization
     */
    public function __construct(string $organization = '')
    {
        $this->organization = $organization;
    }

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }
}
