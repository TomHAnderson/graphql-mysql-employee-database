<?php

namespace Console\Controller;

use Zend\Mvc\Console\Controller\AbstractConsoleController;
use Zend\Console\ColorInterface as Color;
use Zend\Console\Prompt;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use DoctrineModule\Persistence\ProvidesObjectManager;
use Db\Fixture\RoleFixture;
use Db\Entity;

final class AdministratorCreateController extends AbstractConsoleController implements
    ObjectManagerAwareInterface
{
    use ProvidesObjectManager;

    public function indexAction()
    {
        $user = true;
        while ($user) {
            if (is_object($user)) {
                $this->getConsole()->writeLine('Email is already registered', Color::RED);
            }

            $email = Prompt\Line::prompt("email: ", false, 255);

            $user = $this->getObjectManager()
                ->getRepository(Entity\User::class)
                ->findOneBy([
                    'email' => $email,
                ])
                ;
        }

        $pin1 = true;
        $pin2 = false;
        while ($pin1 != $pin2) {
            if ($pin1 !== true) {
                $this->getConsole()->writeLine('pins do not match', Color::RED);
            }

            $secretPrompt1 = new Prompt\Password("pin: ");
            $pin1 = $secretPrompt1->show();

            $secretPrompt2 = new Prompt\Password("confirm pin: ");
            $pin2 = $secretPrompt2->show();
        }

        $adminRole = $this->getObjectManager()
            ->getRepository(Entity\Role::class)
            ->find(RoleFixture::ADMIN_ID)
            ;

        $user = new Entity\User();
        $this->getObjectManager()->persist($user);
        $user->setEmail($email);
        $user->setPin(password_hash($pin1, PASSWORD_DEFAULT));

        $adminRole->addUser($user);
        $user->addRole($adminRole);

        $this->getObjectManager()->flush();

        $this->getConsole()->writeLine('Administrator has been created', Color::GREEN);
    }
}
