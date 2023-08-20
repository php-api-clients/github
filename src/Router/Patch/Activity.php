<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Activity
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function markThreadAsRead(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('thread_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: thread_id');
        }

        $arguments['thread_id'] = $params['thread_id'];
        unset($params['thread_id']);
        if (array_key_exists(Hydrator\Operation\Notifications\Threads\ThreadId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Notifications\Threads\ThreadId::class] = $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId();
        }

        $operator = new Operator\Activity\MarkThreadAsRead($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Notifications\Threads\ThreadId::class]);

        return $operator->call($arguments['thread_id']);
    }
}
