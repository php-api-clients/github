<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\RuleSuite;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function assert;
use function count;
use function is_a;

class RuleSuiteId implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\RuleSuite' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RuleSuite($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RuleSuite(array $payload): RuleSuite
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['actor_id'] ?? null;

            if ($value === null) {
                $properties['actorId'] = null;
                goto after_actorId;
            }

            $properties['actorId'] = $value;

            after_actorId:

            $value = $payload['actor_name'] ?? null;

            if ($value === null) {
                $properties['actorName'] = null;
                goto after_actorName;
            }

            $properties['actorName'] = $value;

            after_actorName:

            $value = $payload['before_sha'] ?? null;

            if ($value === null) {
                $properties['beforeSha'] = null;
                goto after_beforeSha;
            }

            $properties['beforeSha'] = $value;

            after_beforeSha:

            $value = $payload['after_sha'] ?? null;

            if ($value === null) {
                $properties['afterSha'] = null;
                goto after_afterSha;
            }

            $properties['afterSha'] = $value;

            after_afterSha:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $properties['ref'] = null;
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['repository_id'] ?? null;

            if ($value === null) {
                $properties['repositoryId'] = null;
                goto after_repositoryId;
            }

            $properties['repositoryId'] = $value;

            after_repositoryId:

            $value = $payload['repository_name'] ?? null;

            if ($value === null) {
                $properties['repositoryName'] = null;
                goto after_repositoryName;
            }

            $properties['repositoryName'] = $value;

            after_repositoryName:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $properties['pushedAt'] = null;
                goto after_pushedAt;
            }

            $properties['pushedAt'] = $value;

            after_pushedAt:

            $value = $payload['result'] ?? null;

            if ($value === null) {
                $properties['result'] = null;
                goto after_result;
            }

            $properties['result'] = $value;

            after_result:

            $value = $payload['evaluation_result'] ?? null;

            if ($value === null) {
                $properties['evaluationResult'] = null;
                goto after_evaluationResult;
            }

            $properties['evaluationResult'] = $value;

            after_evaluationResult:

            $value = $payload['rule_evaluations'] ?? null;

            if ($value === null) {
                $properties['ruleEvaluations'] = null;
                goto after_ruleEvaluations;
            }

            $properties['ruleEvaluations'] = $value;

            after_ruleEvaluations:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RuleSuite', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RuleSuite::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RuleSuite(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RuleSuite', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\RuleSuite' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RuleSuite($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RuleSuite(mixed $object): mixed
    {
        assert($object instanceof RuleSuite);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $actorId = $object->actorId;

        if ($actorId === null) {
            goto after_actorId;
        }

        after_actorId:        $result['actor_id'] = $actorId;

        $actorName = $object->actorName;

        if ($actorName === null) {
            goto after_actorName;
        }

        after_actorName:        $result['actor_name'] = $actorName;

        $beforeSha = $object->beforeSha;

        if ($beforeSha === null) {
            goto after_beforeSha;
        }

        after_beforeSha:        $result['before_sha'] = $beforeSha;

        $afterSha = $object->afterSha;

        if ($afterSha === null) {
            goto after_afterSha;
        }

        after_afterSha:        $result['after_sha'] = $afterSha;

        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }

        after_ref:        $result['ref'] = $ref;

        $repositoryId = $object->repositoryId;

        if ($repositoryId === null) {
            goto after_repositoryId;
        }

        after_repositoryId:        $result['repository_id'] = $repositoryId;

        $repositoryName = $object->repositoryName;

        if ($repositoryName === null) {
            goto after_repositoryName;
        }

        after_repositoryName:        $result['repository_name'] = $repositoryName;

        $pushedAt = $object->pushedAt;

        if ($pushedAt === null) {
            goto after_pushedAt;
        }

        after_pushedAt:        $result['pushed_at'] = $pushedAt;

        $result = $object->result;

        if ($result === null) {
            goto after_result;
        }

        after_result:        $result['result'] = $result;

        $evaluationResult = $object->evaluationResult;

        if ($evaluationResult === null) {
            goto after_evaluationResult;
        }

        after_evaluationResult:        $result['evaluation_result'] = $evaluationResult;

        $ruleEvaluations = $object->ruleEvaluations;

        if ($ruleEvaluations === null) {
            goto after_ruleEvaluations;
        }

        static $ruleEvaluationsSerializer0;

        if ($ruleEvaluationsSerializer0 === null) {
            $ruleEvaluationsSerializer0 = new SerializeArrayItems(...[]);
        }

        $ruleEvaluations                                          = $ruleEvaluationsSerializer0->serialize($ruleEvaluations, $this);
        after_ruleEvaluations:        $result['rule_evaluations'] = $ruleEvaluations;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
