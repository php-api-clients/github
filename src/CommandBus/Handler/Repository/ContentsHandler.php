<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\ContentsCommand;
use ApiClients\Client\Github\Resource\Contents\DirectoryInterface;
use ApiClients\Client\Github\Resource\Contents\FileInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use RingCentral\Psr7\Request;
use Rx\Observable;
use Rx\React\Promise;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class ContentsHandler
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
     * ContentsHandler constructor.
     * @param RequestService $requestService
     * @param Hydrator $hydrator
     */
    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator = $hydrator;
    }

    public function handle(ContentsCommand $command)
    {
        return resolve(Promise::toObservable($this->requestService->handle(
            new Request('GET', 'repos/' . $command->getFullname() . '/contents/')
        ))->flatMap(function ($contents) {
            return Observable::fromArray($contents->getBody()->getJson());
        })->map(function ($content) {
            if ($content['type'] === 'file') {
                return $this->hydrator->hydrate(
                    FileInterface::HYDRATE_CLASS,
                    $content
                );
            }

            return $this->hydrator->hydrate(
                DirectoryInterface::HYDRATE_CLASS,
                $content
            );
        }));
    }
}
