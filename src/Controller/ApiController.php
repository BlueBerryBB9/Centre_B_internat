<?php

namespace App\Controller;

use Date;
use App\Entity\User;
use DateTimeInterface;
use App\Entity\Chambre;
use App\Entity\Inventory;
use App\Repository\UserRepository;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('/api/new_user', name: 'app_api_new_user', methods: ['POST'])]
    public function newUser(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        // on récupère le corps de la requête "ici en json"
        $body = $request->getContent();
        //on utilise la 'deserialization' pour transformer le json en objet de type User
        $user = $serializer->deserialize($body, User::class, 'json');
        $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));
        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            return $this->json($errors, 400);
        }
        $em->persist($user);
        $em->flush();
        return $this->json([
           'status' => 201,
           'message' => 'user created',
            'data' => $user,
            ], 201, [], ['groups' => 'user']);
    }

    #[Route('api/logout', name: 'app_api_logout', methods: ['POST'])]
    public function logout(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $body = $request->getContent();
        $user = $serializer->deserialize($body, User::class, 'json');

        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            return $this->json($errors, 400);
        }
        $user = $em->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
        if ($user) {
            return $this->json([
                'status' => 200,
                'message' => 'user logged out',
                ], 200);     
        }
        return $this->json([
               'status' => 404,
               'message' => 'user not found',
               ], 404);
    }

    #[Route('/api/users', name: 'app_api_users', methods: ['GET'])]
    public function getUsers(EntityManagerInterface $em): Response
    {
        // return $this->json($userRepository->findAll(), 200, [], ['groups' => ['user']]);
        $users = $em->getRepository(User::class)->findAll();
        return $this->json([
            'status' => 200,
            'message' => 'users list',
            'data' => $users,
            ], 200, [], ['groups' => 'user']);
    }

    #[Route('/api/users/{id}', name: 'app_api_user_show', methods: ['GET'])]
    public function showUser(int $id, EntityManagerInterface $em): Response
    {
        $user = $em->getRepository(User::class)->find($id);
        return $this->json([
            'status' => 200,
            'message' => 'user',
            'data' => $user,
            ], 200, [], ['groups' => ['user', 'user2']]);
    }

    // #[Route('/api/users/{id}/edit', name: 'app_api_edit_user', methods: ['PUT'])]
    // public function editUser(User $user, Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    // {
    //     $user = $serializer->deserialize($request->getContent(), User::Class, 'json', ['object_to_populate' => $user]);

    //     $errors = $validator->validate($user);
    //     if (count($errors) > 0) {
    //         return $this->json($errors, 400);
    //     }
        
    //     $em->flush();

    //     return $this->json([
    //         'status' => 200,
    //         'message' => 'user edited succesfully',
    //         'data' => $user,
    //         ], 200, [], ['groups' => ['user2']]);
    // }

    //!---------------------------------------------------------------------------

    #[Route('/api/new_chambre', name: 'app_api_new_chambre', methods: ['POST'])]
    public function newChambre(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $body = $request->getContent();
        $chambre = $serializer->deserialize($body, Chambre::class, 'json');
        $chambre->setNChambre(1); // Replace (int) with a valid integer value
        // $chambre->setNomBat($chambre->getNomBat());
        // $chambre->setCapacite($chambre->getCapacite());
        $chambre->setCapaciteLit(1);
        // $chambre->setHandicap($chambre->getHandicap());
        // $chambre->setFormation($chambre->getFormation());
        // $chambre->setformationl($chambre->getformation());
        // $chambre->setNom($chambre->getNom());
        // $chambre->stPrenom($chambre->getstPrenom());
        $chambre->setActive(true);

        $errors = $validator->validate($chambre);
        if (count($errors) > 0) {
            return $this->json($errors, 400);
        }

        $em->persist($chambre);
        $em->flush();
        return $this->json([
           'status' => 201,
           'message' => 'chambre created',
            'data' => $chambre,
            ], 201, [], ['groups' => ['chambre']]);
    }

    #[Route('/api/chambres', name: 'app_api_chambres', methods: ['GET'])]
    public function getChambres(EntityManagerInterface $em): Response
    {
        $chambres = $em->getRepository(Chambre::class)->findAll();
        return $this->json([
           'status' => 200,
           'message' => 'chambres list',
            'data' => $chambres,
            ], 200, [], ['groups' => ['chambre']]);
    }

    #[Route('/api/chambres/{id}', name: 'app_api_chambre', methods: ['GET'])]
    public function getChambre(Chambre $chambre): Response
    {
        return $this->json([
           'status' => 200,
           'message' => 'chambre',
            'data' => $chambre,
            ], 200, [], ['groups' => ['chambre', 'chambre2']]);
    }

    // #[Route('/api/chambres/{id}/edit', name: 'app_api_edit_chambre', methods: ['PUT'])]
    // public function editChambre(Chambre $chambre, Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    // {
    //     $chambre = $serializer->deserialize($request->getContent(), Chambre::Class, 'json', ['object_to_populate' => $chambre]);

    //     $errors = $validator->validate($chambre);
    //     if (count($errors) > 0) {
    //         return $this->json($errors, 400);
    //     }
        
    //     $em->flush();

    //     return $this->json([
    //        'status' => 200,
    //        'message' => 'chambre edited succesfully',
    //         'data' => $chambre,
    //         ], 200, [], ['groups' => ['chambre2']]);
    // }

    //!---------------------------------------------------------------------------
    
    #[Route('/api/inventorys', name: 'app_api_inventorys', methods: ['GET'])]
    public function getInventorys(EntityManagerInterface $em): Response
    {
        $inventorys = $em->getRepository(Inventory::class)->findAll();
        return $this->json([
           'status' => 200,
           'message' => 'inventorys list',
            'data' => $inventorys,
            ], 200, [], ['groups' => ['inventory']]);
    }

    #[Route('/api/inventorys/{id}', name: 'app_api_inventory', methods: ['GET'])]
    public function getInventory(Inventory $inventory): Response
    {
        return $this->json([
           'status' => 200,
           'message' => 'inventory',
            'data' => $inventory,
            ], 200, [], ['groups' => ['inventory']]);
    }

    // #[Route('/api/inventorys/{id}/edit', name: 'app_api_edit_inventory', methods: ['PUT'])]
    // public function editInventory(Inventory $inventory, Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    // {
    //     $inventory = $serializer->deserialize($request->getContent(), Inventory::Class, 'json', ['object_to_populate' => $inventory]);

    //     $errors = $validator->validate($inventory);
    //     if (count($errors) > 0) {
    //         return $this->json($errors, 400);
    //     }
        
    //     $em->flush();

    //     return $this->json([
    //        'status' => 200,
    //        'message' => 'inventory edited succesfully',
    //         'data' => $inventory,
    //         ], 200, [], ['groups' => ['inventory']]);
    // }

    #[Route('/api/new_inventory', name: 'app_api_inventory_new', methods: ['POST'])]
    public function newInventory(ChambreRepository $chambreRepository, Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $new_chambre = null;
        $body = $request->getContent();
        $inventory = $serializer->deserialize($body, Inventory::class, 'json');
        //dans cet objet on renseigne le createdAt
        $inventory->setCreatedAt(new \DateTimeImmutable());
        $inventory->setDateEntree(new \DateTime());
        $inventory->setDateSortie(new \DateTime());
        $inventory->setAuteur($this->getUser());

        $chambres = $chambreRepository->findAll();
        foreach ($chambres as $key => $value) {
            if ($value->getNChambre() == $inventory->getNChambre()) {
                $new_chambre = $value;
            }
        }
        $inventory->setChambre($new_chambre);

        $errors = $validator->validate($inventory);
        if (count($errors)) {
            return $this->json($errors, 400);
        }
        $em->persist($inventory);
        $em->flush();
        return $this->json([
            'status' => 201,
           'message' => 'inventory created',
            'data' => $inventory,
            ], 201, [], ['groups' => ['inventory']]);
    }
}

