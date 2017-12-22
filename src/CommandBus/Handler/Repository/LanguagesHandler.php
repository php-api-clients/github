<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\LanguagesCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;
use function React\Promise\resolve;

final class LanguagesHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * LanguagesHandler constructor.
     * @param RequestService $requestService
     */
    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * @param  LanguagesCommand $command
     * @return PromiseInterface
     */
    public function handle(LanguagesCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request('GET', 'repos/' . $command->getFullName() . '/languages')
        )->then(function ($response) {
            return resolve($response->getBody()->getParsedContents());
        });
    }
}
