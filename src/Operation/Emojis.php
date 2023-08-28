<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;

final class Emojis
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function get(): Json|array
    {
        return $this->operators->emojis👷Get()->call();
    }
}
