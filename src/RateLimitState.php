<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Middleware\RateLimitStatusMiddleware;
use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Middleware\JsonDecodeMiddleware;
use ApiClients\Foundation\Transport\Middleware\JsonEncodeMiddleware;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\HttpExceptions\HttpExceptionsMiddleware;
use ApiClients\Middleware\UserAgent\Options as UserAgentMiddlewareOptions;
use ApiClients\Middleware\UserAgent\UserAgentMiddleware;
use ApiClients\Middleware\UserAgent\UserAgentStrategies;
use function ApiClients\Foundation\options_merge;

final class RateLimitState
{
    /**
     * @var int
     */
    private $limit = 0;

    /**
     * @var int
     */
    private $remaining = 0;

    /**
     * @var int
     */
    private $reset = 0;

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getRemaining(): int
    {
        return $this->remaining;
    }

    /**
     * @param int $remaining
     */
    public function setRemaining(int $remaining)
    {
        $this->remaining = $remaining;
    }

    /**
     * @return int
     */
    public function getReset(): int
    {
        return $this->reset;
    }

    /**
     * @param int $reset
     */
    public function setReset(int $reset)
    {
        $this->reset = $reset;
    }
}
