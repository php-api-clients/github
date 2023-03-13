<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Timing implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu⚡️JobRuns($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['billable'] ?? null;

            if ($value === null) {
                $missingFields[] = 'billable';
                goto after_billable;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'billable';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['billable'] = $value;

            after_billable:

            $value = $payload['run_duration_ms'] ?? null;

            if ($value === null) {
                $properties['run_duration_ms'] = null;
                goto after_run_duration_ms;
            }

            $properties['run_duration_ms'] = $value;

            after_run_duration_ms:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['u_b_u_n_t_u'] ?? null;

            if ($value === null) {
                $properties['UBUNTU'] = null;
                goto after_UBUNTU;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'UBUNTU';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['UBUNTU'] = $value;

            after_UBUNTU:

            $value = $payload['m_a_c_o_s'] ?? null;

            if ($value === null) {
                $properties['MACOS'] = null;
                goto after_MACOS;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'MACOS';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['MACOS'] = $value;

            after_MACOS:

            $value = $payload['w_i_n_d_o_w_s'] ?? null;

            if ($value === null) {
                $properties['WINDOWS'] = null;
                goto after_WINDOWS;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'WINDOWS';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['WINDOWS'] = $value;

            after_WINDOWS:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_ms';
                goto after_total_ms;
            }

            $properties['total_ms'] = $value;

            after_total_ms:

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            $properties['jobs'] = $value;

            after_jobs:

            $value = $payload['job_runs'] ?? null;

            if ($value === null) {
                $properties['job_runs'] = null;
                goto after_job_runs;
            }

            static $job_runsCaster1;

            if ($job_runsCaster1 === null) {
                $job_runsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns',
));
            }

            $value = $job_runsCaster1->cast($value, $this);

            $properties['job_runs'] = $value;

            after_job_runs:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu⚡️JobRuns(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['job_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'job_id';
                goto after_job_id;
            }

            $properties['job_id'] = $value;

            after_job_id:

            $value = $payload['duration_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'duration_ms';
                goto after_duration_ms;
            }

            $properties['duration_ms'] = $value;

            after_duration_ms:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu⚡️JobRuns($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage);
        $result = [];

        $billable = $object->billable;
        $billable = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable($billable);
        after_billable:        $result['billable'] = $billable;

        
        $run_duration_ms = $object->run_duration_ms;

        if ($run_duration_ms === null) {
            goto after_run_duration_ms;
        }
        after_run_duration_ms:        $result['run_duration_ms'] = $run_duration_ms;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable);
        $result = [];

        $UBUNTU = $object->UBUNTU;

        if ($UBUNTU === null) {
            goto after_UBUNTU;
        }
        $UBUNTU = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($UBUNTU);
        after_UBUNTU:        $result['u_b_u_n_t_u'] = $UBUNTU;

        
        $MACOS = $object->MACOS;

        if ($MACOS === null) {
            goto after_MACOS;
        }
        $MACOS = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($MACOS);
        after_MACOS:        $result['m_a_c_o_s'] = $MACOS;

        
        $WINDOWS = $object->WINDOWS;

        if ($WINDOWS === null) {
            goto after_WINDOWS;
        }
        $WINDOWS = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($WINDOWS);
        after_WINDOWS:        $result['w_i_n_d_o_w_s'] = $WINDOWS;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu);
        $result = [];

        $total_ms = $object->total_ms;
        after_total_ms:        $result['total_ms'] = $total_ms;

        
        $jobs = $object->jobs;
        after_jobs:        $result['jobs'] = $jobs;

        
        $job_runs = $object->job_runs;

        if ($job_runs === null) {
            goto after_job_runs;
        }
        static $job_runsSerializer0;

        if ($job_runsSerializer0 === null) {
            $job_runsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns',
));
        }
        
        $job_runs = $job_runsSerializer0->serialize($job_runs, $this);
        after_job_runs:        $result['job_runs'] = $job_runs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu⚡️JobRuns(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns);
        $result = [];

        $job_id = $object->job_id;
        after_job_id:        $result['job_id'] = $job_id;

        
        $duration_ms = $object->duration_ms;
        after_duration_ms:        $result['duration_ms'] = $duration_ms;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
