<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\AddLabelCommand;
use ApiClients\Client\Github\Resource\LabelInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\JsonStream;
use ApiClients\Foundation\Transport\Service\RequestService;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class AddLabelHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @param RequestService $requestService
     * @param Hydrator $hydrator
     */
    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator = $hydrator;
    }

    /**
     * @param AddLabelCommand $command
     * @return PromiseInterface
     */
    public function handle(AddLabelCommand $command): PromiseInterface
    {
        return $this->requestService->handle(
            new Request(
                'POST',
                'repos/' . $command->getRepository() . '/labels',
                [],
                new JsonStream([
                    'name' => $command->getName(),
                    'color' => $command->getColour(),
                ])
            )
        )->then(function ($label) {
            return $this->hydrator->hydrate(LabelInterface::HYDRATE_CLASS, $label->getBody()->getJson());
        });
    }
}
