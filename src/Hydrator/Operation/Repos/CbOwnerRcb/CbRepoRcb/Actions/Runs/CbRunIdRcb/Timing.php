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
                'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos⚡️JobRuns($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($payload),
                'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows⚡️JobRuns($payload),
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
                $properties['runDurationMs'] = null;
                goto after_runDurationMs;
            }

            $properties['runDurationMs'] = $value;

            after_runDurationMs:

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
            $value = $payload['UBUNTU'] ?? null;

            if ($value === null) {
                $properties['ubuntu'] = null;
                goto after_ubuntu;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'ubuntu';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['ubuntu'] = $value;

            after_ubuntu:

            $value = $payload['MACOS'] ?? null;

            if ($value === null) {
                $properties['macos'] = null;
                goto after_macos;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'macos';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['macos'] = $value;

            after_macos:

            $value = $payload['WINDOWS'] ?? null;

            if ($value === null) {
                $properties['windows'] = null;
                goto after_windows;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'windows';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['windows'] = $value;

            after_windows:

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
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            $properties['jobs'] = $value;

            after_jobs:

            $value = $payload['job_runs'] ?? null;

            if ($value === null) {
                $properties['jobRuns'] = null;
                goto after_jobRuns;
            }

            static $jobRunsCaster1;

            if ($jobRunsCaster1 === null) {
                $jobRunsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns',
));
            }

            $value = $jobRunsCaster1->cast($value, $this);

            $properties['jobRuns'] = $value;

            after_jobRuns:

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
                goto after_jobId;
            }

            $properties['jobId'] = $value;

            after_jobId:

            $value = $payload['duration_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'duration_ms';
                goto after_durationMs;
            }

            $properties['durationMs'] = $value;

            after_durationMs:

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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_ms';
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            $properties['jobs'] = $value;

            after_jobs:

            $value = $payload['job_runs'] ?? null;

            if ($value === null) {
                $properties['jobRuns'] = null;
                goto after_jobRuns;
            }

            static $jobRunsCaster1;

            if ($jobRunsCaster1 === null) {
                $jobRunsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Macos\\JobRuns',
));
            }

            $value = $jobRunsCaster1->cast($value, $this);

            $properties['jobRuns'] = $value;

            after_jobRuns:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos⚡️JobRuns(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['job_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'job_id';
                goto after_jobId;
            }

            $properties['jobId'] = $value;

            after_jobId:

            $value = $payload['duration_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'duration_ms';
                goto after_durationMs;
            }

            $properties['durationMs'] = $value;

            after_durationMs:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_ms';
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            $properties['jobs'] = $value;

            after_jobs:

            $value = $payload['job_runs'] ?? null;

            if ($value === null) {
                $properties['jobRuns'] = null;
                goto after_jobRuns;
            }

            static $jobRunsCaster1;

            if ($jobRunsCaster1 === null) {
                $jobRunsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Windows\\JobRuns',
));
            }

            $value = $jobRunsCaster1->cast($value, $this);

            $properties['jobRuns'] = $value;

            after_jobRuns:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows⚡️JobRuns(array $payload): \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['job_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'job_id';
                goto after_jobId;
            }

            $properties['jobId'] = $value;

            after_jobId:

            $value = $payload['duration_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'duration_ms';
                goto after_durationMs;
            }

            $properties['durationMs'] = $value;

            after_durationMs:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos⚡️JobRuns($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($object),
            'ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows⚡️JobRuns($object),
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

        
        $runDurationMs = $object->runDurationMs;

        if ($runDurationMs === null) {
            goto after_runDurationMs;
        }
        after_runDurationMs:        $result['run_duration_ms'] = $runDurationMs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable);
        $result = [];

        $ubuntu = $object->ubuntu;

        if ($ubuntu === null) {
            goto after_ubuntu;
        }
        $ubuntu = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($ubuntu);
        after_ubuntu:        $result['UBUNTU'] = $ubuntu;

        
        $macos = $object->macos;

        if ($macos === null) {
            goto after_macos;
        }
        $macos = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($macos);
        after_macos:        $result['MACOS'] = $macos;

        
        $windows = $object->windows;

        if ($windows === null) {
            goto after_windows;
        }
        $windows = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($windows);
        after_windows:        $result['WINDOWS'] = $windows;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu);
        $result = [];

        $totalMs = $object->totalMs;
        after_totalMs:        $result['total_ms'] = $totalMs;

        
        $jobs = $object->jobs;
        after_jobs:        $result['jobs'] = $jobs;

        
        $jobRuns = $object->jobRuns;

        if ($jobRuns === null) {
            goto after_jobRuns;
        }
        static $jobRunsSerializer0;

        if ($jobRunsSerializer0 === null) {
            $jobRunsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns',
));
        }
        
        $jobRuns = $jobRunsSerializer0->serialize($jobRuns, $this);
        after_jobRuns:        $result['job_runs'] = $jobRuns;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu⚡️JobRuns(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns);
        $result = [];

        $jobId = $object->jobId;
        after_jobId:        $result['job_id'] = $jobId;

        
        $durationMs = $object->durationMs;
        after_durationMs:        $result['duration_ms'] = $durationMs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos);
        $result = [];

        $totalMs = $object->totalMs;
        after_totalMs:        $result['total_ms'] = $totalMs;

        
        $jobs = $object->jobs;
        after_jobs:        $result['jobs'] = $jobs;

        
        $jobRuns = $object->jobRuns;

        if ($jobRuns === null) {
            goto after_jobRuns;
        }
        static $jobRunsSerializer0;

        if ($jobRunsSerializer0 === null) {
            $jobRunsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Macos\\JobRuns',
));
        }
        
        $jobRuns = $jobRunsSerializer0->serialize($jobRuns, $this);
        after_jobRuns:        $result['job_runs'] = $jobRuns;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos⚡️JobRuns(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos\JobRuns);
        $result = [];

        $jobId = $object->jobId;
        after_jobId:        $result['job_id'] = $jobId;

        
        $durationMs = $object->durationMs;
        after_durationMs:        $result['duration_ms'] = $durationMs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows);
        $result = [];

        $totalMs = $object->totalMs;
        after_totalMs:        $result['total_ms'] = $totalMs;

        
        $jobs = $object->jobs;
        after_jobs:        $result['jobs'] = $jobs;

        
        $jobRuns = $object->jobRuns;

        if ($jobRuns === null) {
            goto after_jobRuns;
        }
        static $jobRunsSerializer0;

        if ($jobRunsSerializer0 === null) {
            $jobRunsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Windows\\JobRuns',
));
        }
        
        $jobRuns = $jobRunsSerializer0->serialize($jobRuns, $this);
        after_jobRuns:        $result['job_runs'] = $jobRuns;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows⚡️JobRuns(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows\JobRuns);
        $result = [];

        $jobId = $object->jobId;
        after_jobId:        $result['job_id'] = $jobId;

        
        $durationMs = $object->durationMs;
        after_durationMs:        $result['duration_ms'] = $durationMs;


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
