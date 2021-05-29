<?php

declare(strict_types=1);

namespace ApiClients\Client\Github;

final class RateLimitState
{
    private int $limit = 0;

    private int $remaining = 0;

    private int $reset = 0;

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getRemaining(): int
    {
        return $this->remaining;
    }

    public function setRemaining(int $remaining): void
    {
        $this->remaining = $remaining;
    }

    public function getReset(): int
    {
        return $this->reset;
    }

    public function setReset(int $reset): void
    {
        $this->reset = $reset;
    }
}
