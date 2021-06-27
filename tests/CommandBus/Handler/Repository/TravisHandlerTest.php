<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\TravisCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\TravisHandler;
use ApiClients\Client\Travis\AsyncClientInterface;
use ApiClients\Client\Travis\Resource\RepositoryInterface;
use ApiClients\Tools\TestUtilities\TestCase;

use function React\Promise\resolve;

/**
 * @internal
 */
final class TravisHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $command      = new TravisCommand('php-api-clients/travis');
        $repository   = $this->prophesize(RepositoryInterface::class)->reveal();
        $travisClient = $this->prophesize(AsyncClientInterface::class);
        $travisClient->repository('php-api-clients/travis')->shouldBeCalled()->willReturn(resolve($repository));
        $travisHandler    = new TravisHandler($travisClient->reveal());
        $travisRepository = $this->await($travisHandler->handle($command));
        self::assertSame($repository, $travisRepository);
    }
}
