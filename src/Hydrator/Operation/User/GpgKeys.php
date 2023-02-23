<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\User;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class GpgKeys implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\GpgKey' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️GpgKey($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️GpgKey(array $payload): \ApiClients\Client\Github\Schema\GpgKey
        {
            $properties = []; 
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

                $value = $payload['primary_key_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'primary_key_id';
                    goto after_primary_key_id;
                }

                $properties['primary_key_id'] = $value;
    
                after_primary_key_id:

                $value = $payload['key_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'key_id';
                    goto after_key_id;
                }

                $properties['key_id'] = $value;
    
                after_key_id:

                $value = $payload['public_key'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public_key';
                    goto after_public_key;
                }

                $properties['public_key'] = $value;
    
                after_public_key:

                $value = $payload['emails'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'emails';
                    goto after_emails;
                }

                $properties['emails'] = $value;
    
                after_emails:

                $value = $payload['subkeys'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subkeys';
                    goto after_subkeys;
                }

                $properties['subkeys'] = $value;
    
                after_subkeys:

                $value = $payload['can_sign'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'can_sign';
                    goto after_can_sign;
                }

                $properties['can_sign'] = $value;
    
                after_can_sign:

                $value = $payload['can_encrypt_comms'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'can_encrypt_comms';
                    goto after_can_encrypt_comms;
                }

                $properties['can_encrypt_comms'] = $value;
    
                after_can_encrypt_comms:

                $value = $payload['can_encrypt_storage'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'can_encrypt_storage';
                    goto after_can_encrypt_storage;
                }

                $properties['can_encrypt_storage'] = $value;
    
                after_can_encrypt_storage:

                $value = $payload['can_certify'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'can_certify';
                    goto after_can_certify;
                }

                $properties['can_certify'] = $value;
    
                after_can_certify:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'expires_at';
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

                $value = $payload['revoked'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'revoked';
                    goto after_revoked;
                }

                $properties['revoked'] = $value;
    
                after_revoked:

                $value = $payload['raw_key'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'raw_key';
                    goto after_raw_key;
                }

                $properties['raw_key'] = $value;
    
                after_raw_key:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\GpgKey', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\GpgKey::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\GpgKey(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\GpgKey', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\Schema\GpgKey' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️GpgKey($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️GpgKey(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\GpgKey);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $primary_key_id = $object->primary_key_id;

        if ($primary_key_id === null) {
            goto after_primary_key_id;
        }
        after_primary_key_id:        $result['primary_key_id'] = $primary_key_id;

        
        $key_id = $object->key_id;

        if ($key_id === null) {
            goto after_key_id;
        }
        after_key_id:        $result['key_id'] = $key_id;

        
        $public_key = $object->public_key;

        if ($public_key === null) {
            goto after_public_key;
        }
        after_public_key:        $result['public_key'] = $public_key;

        
        $emails = $object->emails;

        if ($emails === null) {
            goto after_emails;
        }
        static $emailsSerializer0;

        if ($emailsSerializer0 === null) {
            $emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $emails = $emailsSerializer0->serialize($emails, $this);
        after_emails:        $result['emails'] = $emails;

        
        $subkeys = $object->subkeys;

        if ($subkeys === null) {
            goto after_subkeys;
        }
        static $subkeysSerializer0;

        if ($subkeysSerializer0 === null) {
            $subkeysSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $subkeys = $subkeysSerializer0->serialize($subkeys, $this);
        after_subkeys:        $result['subkeys'] = $subkeys;

        
        $can_sign = $object->can_sign;

        if ($can_sign === null) {
            goto after_can_sign;
        }
        after_can_sign:        $result['can_sign'] = $can_sign;

        
        $can_encrypt_comms = $object->can_encrypt_comms;

        if ($can_encrypt_comms === null) {
            goto after_can_encrypt_comms;
        }
        after_can_encrypt_comms:        $result['can_encrypt_comms'] = $can_encrypt_comms;

        
        $can_encrypt_storage = $object->can_encrypt_storage;

        if ($can_encrypt_storage === null) {
            goto after_can_encrypt_storage;
        }
        after_can_encrypt_storage:        $result['can_encrypt_storage'] = $can_encrypt_storage;

        
        $can_certify = $object->can_certify;

        if ($can_certify === null) {
            goto after_can_certify;
        }
        after_can_certify:        $result['can_certify'] = $can_certify;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $expires_at = $object->expires_at;

        if ($expires_at === null) {
            goto after_expires_at;
        }
        after_expires_at:        $result['expires_at'] = $expires_at;

        
        $revoked = $object->revoked;

        if ($revoked === null) {
            goto after_revoked;
        }
        after_revoked:        $result['revoked'] = $revoked;

        
        $raw_key = $object->raw_key;

        if ($raw_key === null) {
            goto after_raw_key;
        }
        after_raw_key:        $result['raw_key'] = $raw_key;


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
