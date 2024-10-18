<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions;

use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\RunnerGroupsOrg;
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

class RunnerGroups implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️ApplicationJson⚡️Ok($payload),
                'ApiClients\Client\GitHub\Schema\RunnerGroupsOrg' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerGroupsOrg($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️ApplicationJson⚡️Ok(array $payload): Ok
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['runner_groups'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runner_groups';
                goto after_runnerGroups;
            }

            $properties['runnerGroups'] = $value;

            after_runnerGroups:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Ok::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Ok(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerGroupsOrg(array $payload): RunnerGroupsOrg
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $missingFields[] = 'visibility';
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['default'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default';
                goto after_default;
            }

            $properties['default'] = $value;

            after_default:

            $value = $payload['selected_repositories_url'] ?? null;

            if ($value === null) {
                $properties['selectedRepositoriesUrl'] = null;
                goto after_selectedRepositoriesUrl;
            }

            $properties['selectedRepositoriesUrl'] = $value;

            after_selectedRepositoriesUrl:

            $value = $payload['runners_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runners_url';
                goto after_runnersUrl;
            }

            $properties['runnersUrl'] = $value;

            after_runnersUrl:

            $value = $payload['hosted_runners_url'] ?? null;

            if ($value === null) {
                $properties['hostedRunnersUrl'] = null;
                goto after_hostedRunnersUrl;
            }

            $properties['hostedRunnersUrl'] = $value;

            after_hostedRunnersUrl:

            $value = $payload['inherited'] ?? null;

            if ($value === null) {
                $missingFields[] = 'inherited';
                goto after_inherited;
            }

            $properties['inherited'] = $value;

            after_inherited:

            $value = $payload['inherited_allows_public_repositories'] ?? null;

            if ($value === null) {
                $properties['inheritedAllowsPublicRepositories'] = null;
                goto after_inheritedAllowsPublicRepositories;
            }

            $properties['inheritedAllowsPublicRepositories'] = $value;

            after_inheritedAllowsPublicRepositories:

            $value = $payload['allows_public_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'allows_public_repositories';
                goto after_allowsPublicRepositories;
            }

            $properties['allowsPublicRepositories'] = $value;

            after_allowsPublicRepositories:

            $value = $payload['workflow_restrictions_read_only'] ?? null;

            if ($value === null) {
                $properties['workflowRestrictionsReadOnly'] = null;
                goto after_workflowRestrictionsReadOnly;
            }

            $properties['workflowRestrictionsReadOnly'] = $value;

            after_workflowRestrictionsReadOnly:

            $value = $payload['restricted_to_workflows'] ?? null;

            if ($value === null) {
                $properties['restrictedToWorkflows'] = null;
                goto after_restrictedToWorkflows;
            }

            $properties['restrictedToWorkflows'] = $value;

            after_restrictedToWorkflows:

            $value = $payload['selected_workflows'] ?? null;

            if ($value === null) {
                $properties['selectedWorkflows'] = null;
                goto after_selectedWorkflows;
            }

            $properties['selectedWorkflows'] = $value;

            after_selectedWorkflows:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RunnerGroupsOrg', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RunnerGroupsOrg::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RunnerGroupsOrg(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RunnerGroupsOrg', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️ApplicationJson⚡️Ok($object),
                'ApiClients\Client\GitHub\Schema\RunnerGroupsOrg' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerGroupsOrg($object),
                default => throw new LogicException("No serialization defined for $className"),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️ApplicationJson⚡️Ok(mixed $object): mixed
    {
        assert($object instanceof Ok);
        $result = [];

        $totalCount                                     = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        $runnerGroups = $object->runnerGroups;
        static $runnerGroupsSerializer0;

        if ($runnerGroupsSerializer0 === null) {
            $runnerGroupsSerializer0 = new SerializeArrayItems(...[]);
        }

        $runnerGroups                                       = $runnerGroupsSerializer0->serialize($runnerGroups, $this);
        after_runnerGroups:        $result['runner_groups'] = $runnerGroups;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerGroupsOrg(mixed $object): mixed
    {
        assert($object instanceof RunnerGroupsOrg);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $visibility                                    = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        $default                                 = $object->default;
        after_default:        $result['default'] = $default;

        $selectedRepositoriesUrl = $object->selectedRepositoriesUrl;

        if ($selectedRepositoriesUrl === null) {
            goto after_selectedRepositoriesUrl;
        }

        after_selectedRepositoriesUrl:        $result['selected_repositories_url'] = $selectedRepositoriesUrl;

        $runnersUrl                                     = $object->runnersUrl;
        after_runnersUrl:        $result['runners_url'] = $runnersUrl;

        $hostedRunnersUrl = $object->hostedRunnersUrl;

        if ($hostedRunnersUrl === null) {
            goto after_hostedRunnersUrl;
        }

        after_hostedRunnersUrl:        $result['hosted_runners_url'] = $hostedRunnersUrl;

        $inherited                                   = $object->inherited;
        after_inherited:        $result['inherited'] = $inherited;

        $inheritedAllowsPublicRepositories = $object->inheritedAllowsPublicRepositories;

        if ($inheritedAllowsPublicRepositories === null) {
            goto after_inheritedAllowsPublicRepositories;
        }

        after_inheritedAllowsPublicRepositories:        $result['inherited_allows_public_repositories'] = $inheritedAllowsPublicRepositories;

        $allowsPublicRepositories                                                    = $object->allowsPublicRepositories;
        after_allowsPublicRepositories:        $result['allows_public_repositories'] = $allowsPublicRepositories;

        $workflowRestrictionsReadOnly = $object->workflowRestrictionsReadOnly;

        if ($workflowRestrictionsReadOnly === null) {
            goto after_workflowRestrictionsReadOnly;
        }

        after_workflowRestrictionsReadOnly:        $result['workflow_restrictions_read_only'] = $workflowRestrictionsReadOnly;

        $restrictedToWorkflows = $object->restrictedToWorkflows;

        if ($restrictedToWorkflows === null) {
            goto after_restrictedToWorkflows;
        }

        after_restrictedToWorkflows:        $result['restricted_to_workflows'] = $restrictedToWorkflows;

        $selectedWorkflows = $object->selectedWorkflows;

        if ($selectedWorkflows === null) {
            goto after_selectedWorkflows;
        }

        static $selectedWorkflowsSerializer0;

        if ($selectedWorkflowsSerializer0 === null) {
            $selectedWorkflowsSerializer0 = new SerializeArrayItems(...[]);
        }

        $selectedWorkflows                                            = $selectedWorkflowsSerializer0->serialize($selectedWorkflows, $this);
        after_selectedWorkflows:        $result['selected_workflows'] = $selectedWorkflows;

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
