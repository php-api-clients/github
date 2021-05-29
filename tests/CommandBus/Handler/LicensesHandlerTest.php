<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\LicensesCommand;
use ApiClients\Client\Github\CommandBus\Handler\LicensesHandler;
use ApiClients\Client\Github\Resource\LicenseInterface;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

/**
 * @internal
 */
final class LicensesHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $license = $this->prophesize(LicenseInterface::class)->reveal();

        $command = new LicensesCommand();

        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate(
            'licenses',
            '',
            LicenseInterface::HYDRATE_CLASS
        )->shouldBeCalled()->willReturn(Observable::fromArray([$license]));

        $licensesHandler = new LicensesHandler(
            $service->reveal()
        );

        self::assertSame($license, $this->await(Promise::fromObservable($this->await($licensesHandler->handle($command)))));
    }
}
