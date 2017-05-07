<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\ContentsCommand;
use ApiClients\Client\Github\Resource\Contents\DirectoryInterface;
use ApiClients\Client\Github\Resource\Contents\FileInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use RingCentral\Psr7\Request;
use Rx\React\Promise;
use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

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
        $path = ltrim($command->getPath(), '/');
        $uri = 'repos/' . $command->getFullname() . '/contents/' . $path;
        return resolve(
            Promise::toObservable(
                $this->requestService->request(
                    new Request('GET', $uri)
                )
            )->flatMap(function ($contents) {
                return observableFromArray($contents->getBody()->getJson());
            })->map(function ($content) use ($command) {
                $content['repository_fullname'] = $command->getFullname();
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
            })
        );
    }
}
