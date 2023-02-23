<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Statuses implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\DeploymentStatus' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentStatus($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentStatus(array $payload): \ApiClients\Client\Github\Schema\DeploymentStatus
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'state';
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['creator'] ?? null;
    
                if ($value === null) {
                    $properties['creator'] = null;
                    goto after_creator;
                }

                $properties['creator'] = $value;
    
                after_creator:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'description';
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['environment'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'environment';
                    goto after_environment;
                }

                $properties['environment'] = $value;
    
                after_environment:

                $value = $payload['target_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'target_url';
                    goto after_target_url;
                }

                $properties['target_url'] = $value;
    
                after_target_url:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['deployment_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deployment_url';
                    goto after_deployment_url;
                }

                $properties['deployment_url'] = $value;
    
                after_deployment_url:

                $value = $payload['repository_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_url';
                    goto after_repository_url;
                }

                $properties['repository_url'] = $value;
    
                after_repository_url:

                $value = $payload['environment_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'environment_url';
                    goto after_environment_url;
                }

                $properties['environment_url'] = $value;
    
                after_environment_url:

                $value = $payload['log_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'log_url';
                    goto after_log_url;
                }

                $properties['log_url'] = $value;
    
                after_log_url:

                $value = $payload['performed_via_github_app'] ?? null;
    
                if ($value === null) {
                    $properties['performed_via_github_app'] = null;
                    goto after_performed_via_github_app;
                }

                $properties['performed_via_github_app'] = $value;
    
                after_performed_via_github_app:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DeploymentStatus', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DeploymentStatus::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\DeploymentStatus(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DeploymentStatus', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\Schema\ValidationError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'errors';
                    goto after_errors;
                }

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\ValidationError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\DeploymentStatus' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentStatus($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DeploymentStatus(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DeploymentStatus);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        after_creator:        $result['creator'] = $creator;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $environment = $object->environment;
        after_environment:        $result['environment'] = $environment;

        
        $target_url = $object->target_url;

        if ($target_url === null) {
            goto after_target_url;
        }
        after_target_url:        $result['target_url'] = $target_url;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $deployment_url = $object->deployment_url;

        if ($deployment_url === null) {
            goto after_deployment_url;
        }
        after_deployment_url:        $result['deployment_url'] = $deployment_url;

        
        $repository_url = $object->repository_url;

        if ($repository_url === null) {
            goto after_repository_url;
        }
        after_repository_url:        $result['repository_url'] = $repository_url;

        
        $environment_url = $object->environment_url;
        after_environment_url:        $result['environment_url'] = $environment_url;

        
        $log_url = $object->log_url;
        after_log_url:        $result['log_url'] = $log_url;

        
        $performed_via_github_app = $object->performed_via_github_app;

        if ($performed_via_github_app === null) {
            goto after_performed_via_github_app;
        }
        after_performed_via_github_app:        $result['performed_via_github_app'] = $performed_via_github_app;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


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
