<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Users\CbUsernameRcb;

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
            'ApiClients\Client\GitHub\Schema\GpgKey' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey($payload),
                'ApiClients\Client\GitHub\Schema\GpgKey\Emails' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails($payload),
                'ApiClients\Client\GitHub\Schema\GpgKey\Subkeys' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey(array $payload): \ApiClients\Client\GitHub\Schema\GpgKey
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['primary_key_id'] ?? null;
    
                if ($value === null) {
                    $properties['primary_key_id'] = null;
                    goto after_primary_key_id;
                }

                $properties['primary_key_id'] = $value;
    
                after_primary_key_id:

                $value = $payload['key_id'] ?? null;
    
                if ($value === null) {
                    $properties['key_id'] = null;
                    goto after_key_id;
                }

                $properties['key_id'] = $value;
    
                after_key_id:

                $value = $payload['public_key'] ?? null;
    
                if ($value === null) {
                    $properties['public_key'] = null;
                    goto after_public_key;
                }

                $properties['public_key'] = $value;
    
                after_public_key:

                $value = $payload['emails'] ?? null;
    
                if ($value === null) {
                    $properties['emails'] = null;
                    goto after_emails;
                }

                static $emailsCaster1;
    
                if ($emailsCaster1 === null) {
                    $emailsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Emails',
));
                }
    
                $value = $emailsCaster1->cast($value, $this);

                $properties['emails'] = $value;
    
                after_emails:

                $value = $payload['subkeys'] ?? null;
    
                if ($value === null) {
                    $properties['subkeys'] = null;
                    goto after_subkeys;
                }

                static $subkeysCaster1;
    
                if ($subkeysCaster1 === null) {
                    $subkeysCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Subkeys',
));
                }
    
                $value = $subkeysCaster1->cast($value, $this);

                $properties['subkeys'] = $value;
    
                after_subkeys:

                $value = $payload['can_sign'] ?? null;
    
                if ($value === null) {
                    $properties['can_sign'] = null;
                    goto after_can_sign;
                }

                $properties['can_sign'] = $value;
    
                after_can_sign:

                $value = $payload['can_encrypt_comms'] ?? null;
    
                if ($value === null) {
                    $properties['can_encrypt_comms'] = null;
                    goto after_can_encrypt_comms;
                }

                $properties['can_encrypt_comms'] = $value;
    
                after_can_encrypt_comms:

                $value = $payload['can_encrypt_storage'] ?? null;
    
                if ($value === null) {
                    $properties['can_encrypt_storage'] = null;
                    goto after_can_encrypt_storage;
                }

                $properties['can_encrypt_storage'] = $value;
    
                after_can_encrypt_storage:

                $value = $payload['can_certify'] ?? null;
    
                if ($value === null) {
                    $properties['can_certify'] = null;
                    goto after_can_certify;
                }

                $properties['can_certify'] = $value;
    
                after_can_certify:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $properties['expires_at'] = null;
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

                $value = $payload['revoked'] ?? null;
    
                if ($value === null) {
                    $properties['revoked'] = null;
                    goto after_revoked;
                }

                $properties['revoked'] = $value;
    
                after_revoked:

                $value = $payload['raw_key'] ?? null;
    
                if ($value === null) {
                    $properties['raw_key'] = null;
                    goto after_raw_key;
                }

                $properties['raw_key'] = $value;
    
                after_raw_key:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GpgKey::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\GpgKey(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails(array $payload): \ApiClients\Client\GitHub\Schema\GpgKey\Emails
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['verified'] ?? null;
    
                if ($value === null) {
                    $properties['verified'] = null;
                    goto after_verified;
                }

                $properties['verified'] = $value;
    
                after_verified:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Emails', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GpgKey\Emails::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\GpgKey\Emails(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Emails', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys(array $payload): \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['primary_key_id'] ?? null;
    
                if ($value === null) {
                    $properties['primary_key_id'] = null;
                    goto after_primary_key_id;
                }

                $properties['primary_key_id'] = $value;
    
                after_primary_key_id:

                $value = $payload['key_id'] ?? null;
    
                if ($value === null) {
                    $properties['key_id'] = null;
                    goto after_key_id;
                }

                $properties['key_id'] = $value;
    
                after_key_id:

                $value = $payload['public_key'] ?? null;
    
                if ($value === null) {
                    $properties['public_key'] = null;
                    goto after_public_key;
                }

                $properties['public_key'] = $value;
    
                after_public_key:

                $value = $payload['emails'] ?? null;
    
                if ($value === null) {
                    $properties['emails'] = null;
                    goto after_emails;
                }

                $properties['emails'] = $value;
    
                after_emails:

                $value = $payload['subkeys'] ?? null;
    
                if ($value === null) {
                    $properties['subkeys'] = null;
                    goto after_subkeys;
                }

                $properties['subkeys'] = $value;
    
                after_subkeys:

                $value = $payload['can_sign'] ?? null;
    
                if ($value === null) {
                    $properties['can_sign'] = null;
                    goto after_can_sign;
                }

                $properties['can_sign'] = $value;
    
                after_can_sign:

                $value = $payload['can_encrypt_comms'] ?? null;
    
                if ($value === null) {
                    $properties['can_encrypt_comms'] = null;
                    goto after_can_encrypt_comms;
                }

                $properties['can_encrypt_comms'] = $value;
    
                after_can_encrypt_comms:

                $value = $payload['can_encrypt_storage'] ?? null;
    
                if ($value === null) {
                    $properties['can_encrypt_storage'] = null;
                    goto after_can_encrypt_storage;
                }

                $properties['can_encrypt_storage'] = $value;
    
                after_can_encrypt_storage:

                $value = $payload['can_certify'] ?? null;
    
                if ($value === null) {
                    $properties['can_certify'] = null;
                    goto after_can_certify;
                }

                $properties['can_certify'] = $value;
    
                after_can_certify:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $properties['expires_at'] = null;
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

                $value = $payload['raw_key'] ?? null;
    
                if ($value === null) {
                    $properties['raw_key'] = null;
                    goto after_raw_key;
                }

                $properties['raw_key'] = $value;
    
                after_raw_key:

                $value = $payload['revoked'] ?? null;
    
                if ($value === null) {
                    $properties['revoked'] = null;
                    goto after_revoked;
                }

                $properties['revoked'] = $value;
    
                after_revoked:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Subkeys', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GpgKey\Subkeys::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GpgKey\Subkeys', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\GpgKey' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey($object),
                'ApiClients\Client\GitHub\Schema\GpgKey\Emails' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails($object),
                'ApiClients\Client\GitHub\Schema\GpgKey\Subkeys' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GpgKey);
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
            $emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Emails',
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
            $subkeysSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GpgKey\\Subkeys',
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Emails(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GpgKey\Emails);
        $result = [];
        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $verified = $object->verified;

        if ($verified === null) {
            goto after_verified;
        }
        after_verified:        $result['verified'] = $verified;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GpgKey⚡️Subkeys(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
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

        
        $raw_key = $object->raw_key;

        if ($raw_key === null) {
            goto after_raw_key;
        }
        after_raw_key:        $result['raw_key'] = $raw_key;

        
        $revoked = $object->revoked;

        if ($revoked === null) {
            goto after_revoked;
        }
        after_revoked:        $result['revoked'] = $revoked;


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
