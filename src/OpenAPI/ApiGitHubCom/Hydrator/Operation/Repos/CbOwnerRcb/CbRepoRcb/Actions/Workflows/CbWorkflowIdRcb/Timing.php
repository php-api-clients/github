<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

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
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable\Ubuntu' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage
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
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['billable'] = $value;
    
                after_billable:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['u_b_u_n_t_u'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'u_b_u_n_t_u';
                    goto after_UBUNTU;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'UBUNTU';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['UBUNTU'] = $value;
    
                after_UBUNTU:

                $value = $payload['m_a_c_o_s'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'm_a_c_o_s';
                    goto after_MACOS;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'MACOS';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['MACOS'] = $value;
    
                after_MACOS:

                $value = $payload['w_i_n_d_o_w_s'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'w_i_n_d_o_w_s';
                    goto after_WINDOWS;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'WINDOWS';
                        $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['WINDOWS'] = $value;
    
                after_WINDOWS:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable⚡️Ubuntu(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable\Ubuntu
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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable\Ubuntu::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable\Ubuntu(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage);
        $result = [];
        
        $billable = $object->billable;

        if ($billable === null) {
            goto after_billable;
        }
        $billable = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️WorkflowUsage⚡️Billable($billable);
        after_billable:        $result['billable'] = $billable;


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
