<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\AcceptHeader;
use ApiClients\Client\Github\CommandBus\Command\Repository\CommunityHealthCommand;
use ApiClients\Client\Github\Resource\Repository\CommunityHealthInterface;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class CommunityHealthHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * CommunityHealthHandler constructor.
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * @param  CommunityHealthCommand $command
     * @return PromiseInterface
     */
    public function handle(CommunityHealthCommand $command): PromiseInterface
    {
        return $this->service->fetch(
            'repos/' . $command->getFullName() . '/community/profile',
            '',
            CommunityHealthInterface::HYDRATE_CLASS,
            [
                TransportOptions::HEADERS => [
                    'Accept' => AcceptHeader::getHeader(AcceptHeader::PRESET_COMMUNITY_HEALTH),
                ],
            ]
        );
    }
}
