<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\LabelsCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\LabelsHandler;
use ApiClients\Client\Github\Resource\LabelInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;
use function React\Promise\resolve;

final class LabelsHandlerTest extends TestCase
{
    public function testCommand()
    {
        $labelArray = [
            'foo' => 'bar',
        ];
        $label = $this->prophesize(LabelInterface::class)->reveal();

        $command = new LabelsCommand('api-clients/github');

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->iterate('repos/api-clients/github/labels')->shouldBeCalled()->willReturn(Observable::fromArray([[$labelArray]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(LabelInterface::HYDRATE_CLASS, $labelArray)->shouldBeCalled()->wilLReturn($label);

        $labelsHandler = new LabelsHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        self::assertSame($label, $this->await(Promise::fromObservable($this->await($labelsHandler->handle($command)))));
    }
}
