<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Middleware;

use ApiClients\Client\Github\RateLimitState;
use ApiClients\Foundation\Middleware\DefaultPriorityTrait;
use ApiClients\Foundation\Middleware\ErrorTrait;
use ApiClients\Foundation\Middleware\MiddlewareInterface;
use ApiClients\Foundation\Middleware\PreTrait;
use Psr\Http\Message\ResponseInterface;
use React\Promise\CancellablePromiseInterface;
use function React\Promise\resolve;

final class RateLimitStateMiddleware implements MiddlewareInterface
{
    use DefaultPriorityTrait;
    use PreTrait;
    use ErrorTrait;

    const HEADERS = [
        'X-RateLimit-Limit'     => 'setLimit',
        'X-RateLimit-Remaining' => 'setRemaining',
        'X-RateLimit-Reset'     => 'setReset',
    ];

    /**
     * @var RateLimitState
     */
    private $state;

    /**
     * RateLimitStatusMiddleware constructor.
     * @param RateLimitState $state
     */
    public function __construct(RateLimitState $state)
    {
        $this->state = $state;
    }

    /**
     * @param  ResponseInterface           $response
     * @param  array                       $options
     * @return CancellablePromiseInterface
     */
    public function post(ResponseInterface $response, array $options = []): CancellablePromiseInterface
    {
        foreach (self::HEADERS as $header => $method) {
            if (!$response->hasHeader($header)) {
                continue;
            }

            $this->state->$method((int)$response->getHeaderLine($header));
        }

        return resolve($response);
    }
}
