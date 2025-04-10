<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $user = new User();
            $user->setEmail("patient".$i."@gmail.com");
            $user->setRoles(["role_patient"]);
            $user->setNom("nom".$i);
            $user->setPrenom("prenom".$i);
            $user->setPlainPassword("password");
            $manager->persist($user);
        }

        $manager->flush();
    }
}
