<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\AcceptHeader;
use ApiClients\Client\Github\CommandBus\Command\Repository\CommunityHealthCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\CommunityHealthHandler;
use ApiClients\Client\Github\Resource\Repository\CommunityHealthInterface;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;
use function React\Promise\resolve;

final class CommunityHealthHandlerTest extends TestCase
{
    public function testCommand()
    {
        $command = new CommunityHealthCommand('php-api-clients/github');

        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch(
            'repos/php-api-clients/github/community/profile',
            '',
            CommunityHealthInterface::HYDRATE_CLASS,
            [
                TransportOptions::HEADERS => [
                    'Accept' => AcceptHeader::getHeader(AcceptHeader::PRESET_COMMUNITY_HEALTH),
                ],
            ]
        )->shouldBeCalled()->willReturn(resolve());

        $handler = new CommunityHealthHandler($service->reveal());
        $handler->handle($command);
    }
}
