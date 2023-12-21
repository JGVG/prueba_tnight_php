<?php

namespace App\Controller;

use App\Entity\UsuarioDTO;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/api/listaUsuarios", name="lista_usuarios", methods={"GET"})
     */
    public function listaUsuarios()
    {
        $repository = $this->entityManager->getRepository(UsuarioDTO::class);
        $usuarios = $repository->findAll();

        $response = [];
        foreach ($usuarios as $usuario) {
            $response[] = [
                'id' => $usuario->getId(),
                'nombre' => $usuario->getNombre(),
                'apellido' => $usuario->getApellido(),
                'fechaNacimiento' => $usuario->getFechaNacimiento(),
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/api/addUsuario", name="add_usuario", methods={"POST"})
     */
    public function addUsuario(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $usuario = new UsuarioDTO();
        $usuario->setNombre($data['nombre']);
        $usuario->setApellido($data['apellido']);
        $usuario->setFechaNacimiento($data['fechaNacimiento']);

        $this->entityManager->persist($usuario);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Usuario creado correctamente']);
    }
}