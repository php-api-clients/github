<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\DeleteCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use Psr\Http\Message\ResponseInterface;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class DeleteHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @param RequestService $requestService
     */
    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * @param  DeleteCommand    $command
     * @return PromiseInterface
     */
    public function handle(DeleteCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'DELETE',
                $command->getUrl()
            )
        )->then(function (ResponseInterface $response) {
            return $response->getStatusCode() == 204;
        });
    }
}
