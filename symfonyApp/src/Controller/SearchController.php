<?php
namespace App\Controller;

use App\Entity\Search;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends AbstractController
{
    public function new(Request $Request): Response {

        $form = $this->createForm(SearchType::class, $Search);

        return $this->renderForm('search.html.twig', [
            'form' => $form,
        ]);
    }
}

?>