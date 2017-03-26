<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

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
