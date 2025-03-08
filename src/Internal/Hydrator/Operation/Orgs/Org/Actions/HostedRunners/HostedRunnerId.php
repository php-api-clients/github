<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\HostedRunners;

use ApiClients\Client\GitHub\Schema\ActionsHostedRunner;
use ApiClients\Client\GitHub\Schema\ActionsHostedRunnerMachineSpec;
use ApiClients\Client\GitHub\Schema\ActionsHostedRunnerPoolImage;
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

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class HostedRunnerId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ActionsHostedRunner' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunner($payload),
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerPoolImage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerPoolImage($payload),
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerMachineSpec' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerMachineSpec($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunner(array $payload): ActionsHostedRunner
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

            $value = $payload['runner_group_id'] ?? null;

            if ($value === null) {
                $properties['runnerGroupId'] = null;
                goto after_runnerGroupId;
            }

            $properties['runnerGroupId'] = $value;

            after_runnerGroupId:

            $value = $payload['image_details'] ?? null;

            if ($value === null) {
                $properties['imageDetails'] = null;
                goto after_imageDetails;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'imageDetails';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerPoolImage($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['imageDetails'] = $value;

            after_imageDetails:

            $value = $payload['machine_size_details'] ?? null;

            if ($value === null) {
                $missingFields[] = 'machine_size_details';
                goto after_machineSizeDetails;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'machineSizeDetails';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerMachineSpec($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['machineSizeDetails'] = $value;

            after_machineSizeDetails:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['platform'] ?? null;

            if ($value === null) {
                $missingFields[] = 'platform';
                goto after_platform;
            }

            $properties['platform'] = $value;

            after_platform:

            $value = $payload['maximum_runners'] ?? null;

            if ($value === null) {
                $properties['maximumRunners'] = null;
                goto after_maximumRunners;
            }

            $properties['maximumRunners'] = $value;

            after_maximumRunners:

            $value = $payload['public_ip_enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_ip_enabled';
                goto after_publicIpEnabled;
            }

            $properties['publicIpEnabled'] = $value;

            after_publicIpEnabled:

            $value = $payload['public_ips'] ?? null;

            if ($value === null) {
                $properties['publicIps'] = null;
                goto after_publicIps;
            }

            $properties['publicIps'] = $value;

            after_publicIps:

            $value = $payload['last_active_on'] ?? null;

            if ($value === null) {
                $properties['lastActiveOn'] = null;
                goto after_lastActiveOn;
            }

            $properties['lastActiveOn'] = $value;

            after_lastActiveOn:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunner', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsHostedRunner::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsHostedRunner(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunner', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerPoolImage(array $payload): ActionsHostedRunnerPoolImage
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

            $value = $payload['size_gb'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size_gb';
                goto after_sizeGb;
            }

            $properties['sizeGb'] = $value;

            after_sizeGb:

            $value = $payload['display_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'display_name';
                goto after_displayName;
            }

            $properties['displayName'] = $value;

            after_displayName:

            $value = $payload['source'] ?? null;

            if ($value === null) {
                $missingFields[] = 'source';
                goto after_source;
            }

            $properties['source'] = $value;

            after_source:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerPoolImage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsHostedRunnerPoolImage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsHostedRunnerPoolImage(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerPoolImage', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerMachineSpec(array $payload): ActionsHostedRunnerMachineSpec
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

            $value = $payload['cpu_cores'] ?? null;

            if ($value === null) {
                $missingFields[] = 'cpu_cores';
                goto after_cpuCores;
            }

            $properties['cpuCores'] = $value;

            after_cpuCores:

            $value = $payload['memory_gb'] ?? null;

            if ($value === null) {
                $missingFields[] = 'memory_gb';
                goto after_memoryGb;
            }

            $properties['memoryGb'] = $value;

            after_memoryGb:

            $value = $payload['storage_gb'] ?? null;

            if ($value === null) {
                $missingFields[] = 'storage_gb';
                goto after_storageGb;
            }

            $properties['storageGb'] = $value;

            after_storageGb:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerMachineSpec', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsHostedRunnerMachineSpec::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsHostedRunnerMachineSpec(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ActionsHostedRunnerMachineSpec', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunner' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunner($object),
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerPoolImage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerPoolImage($object),
                'ApiClients\Client\GitHub\Schema\ActionsHostedRunnerMachineSpec' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerMachineSpec($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunner(mixed $object): mixed
    {
        assert($object instanceof ActionsHostedRunner);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $runnerGroupId = $object->runnerGroupId;

        if ($runnerGroupId === null) {
            goto after_runnerGroupId;
        }

        after_runnerGroupId:        $result['runner_group_id'] = $runnerGroupId;

        $imageDetails = $object->imageDetails;

        if ($imageDetails === null) {
            goto after_imageDetails;
        }

        $imageDetails                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerPoolImage($imageDetails);
        after_imageDetails:        $result['image_details'] = $imageDetails;

        $machineSizeDetails                                              = $object->machineSizeDetails;
        $machineSizeDetails                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerMachineSpec($machineSizeDetails);
        after_machineSizeDetails:        $result['machine_size_details'] = $machineSizeDetails;

        $status                                = $object->status;
        after_status:        $result['status'] = $status;

        $platform                                  = $object->platform;
        after_platform:        $result['platform'] = $platform;

        $maximumRunners = $object->maximumRunners;

        if ($maximumRunners === null) {
            goto after_maximumRunners;
        }

        after_maximumRunners:        $result['maximum_runners'] = $maximumRunners;

        $publicIpEnabled                                           = $object->publicIpEnabled;
        after_publicIpEnabled:        $result['public_ip_enabled'] = $publicIpEnabled;

        $publicIps = $object->publicIps;

        if ($publicIps === null) {
            goto after_publicIps;
        }

        static $publicIpsSerializer0;

        if ($publicIpsSerializer0 === null) {
            $publicIpsSerializer0 = new SerializeArrayItems(...[]);
        }

        $publicIps                                    = $publicIpsSerializer0->serialize($publicIps, $this);
        after_publicIps:        $result['public_ips'] = $publicIps;

        $lastActiveOn = $object->lastActiveOn;

        if ($lastActiveOn === null) {
            goto after_lastActiveOn;
        }

        after_lastActiveOn:        $result['last_active_on'] = $lastActiveOn;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerPoolImage(mixed $object): mixed
    {
        assert($object instanceof ActionsHostedRunnerPoolImage);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $sizeGb                                 = $object->sizeGb;
        after_sizeGb:        $result['size_gb'] = $sizeGb;

        $displayName                                      = $object->displayName;
        after_displayName:        $result['display_name'] = $displayName;

        $source                                = $object->source;
        after_source:        $result['source'] = $source;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ActionsHostedRunnerMachineSpec(mixed $object): mixed
    {
        assert($object instanceof ActionsHostedRunnerMachineSpec);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $cpuCores                                   = $object->cpuCores;
        after_cpuCores:        $result['cpu_cores'] = $cpuCores;

        $memoryGb                                   = $object->memoryGb;
        after_memoryGb:        $result['memory_gb'] = $memoryGb;

        $storageGb                                    = $object->storageGb;
        after_storageGb:        $result['storage_gb'] = $storageGb;

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
