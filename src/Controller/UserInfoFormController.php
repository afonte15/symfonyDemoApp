<?php

namespace App\Controller;

use App\Form\UserInfoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserInfoFormController extends AbstractController
{
    /**
     * @Route("/user/info/form", name="user_info_form")
     */
    public function index()
    {
    	$form = $this->createForm(UserInfoType::class);

		$this->render(':user_info_form:index.html.twig');
    }
}
