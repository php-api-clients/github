<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Emojis
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function get(): Json|WithoutBody
    {
        return $this->operators->emojis👷Get()->call();
    }
}
