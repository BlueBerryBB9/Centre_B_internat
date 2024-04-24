<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Chambre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('/api/new_user', name: 'app_api_new_user', methods: ['POST'])]
    public function newUser(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $body = $request->getContent();
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
            ], 201, [], ['groups' => ['user']]);
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

    //!---------------------------------------------------------------------------

    #[Route('/api/new_chambre', name: 'app_api_new_chambre', methods: ['POST'])]
    public function newChambre(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $body = $request->getContent();
        $chambre = $serializer->deserialize($body, Chambre::class, 'json');
        $chambre->setNChambre(1); // Replace (int) with a valid integer value
        // $chambre->setNomBat($chambre->getNomBat());
        // $chambre->setCapacite($chambre->getCapacite());
        $chambre->setCapaciteLit(true);
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
            ], 200, [], ['groups' => ['chambre']]);
    }
}

