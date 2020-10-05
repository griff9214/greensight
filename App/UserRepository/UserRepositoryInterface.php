<?php


namespace App\UserRepository;


interface UserRepositoryInterface
{
    public function findByName(string $name): ?array;
}