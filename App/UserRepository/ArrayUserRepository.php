<?php


namespace App\UserRepository;


class ArrayUserRepository implements UserRepositoryInterface
{
    /**
     * @var array
     */
    private $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function findByName(string $name): ?array
    {
        $foundUsers = array_filter($this->users, function ($user) use ($name) {
            return $user['name'] === $name;
        });
        return $foundUsers[0] ?? null;
    }
}