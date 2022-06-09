<?php

namespace App\Controller;

use App\Document\Meme;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemeController extends AbstractController{

    /**
     * @Route(path="/newMeme", name="new_meme", methods={"POST"})
     */
    public function createAction(DocumentManager $dm)
    {
        $product = new Meme();
        $product->setName('A Foo Bar');
        $product->setEmail('Un email');
    
        $dm->persist($product);
        $dm->flush();
    
        return new Response('Created product id ' . $product->getId());
    }


    /**
     * @Route(path="/all", name="all_meme", methods={"GET"})
     */
    public function findMemes(DocumentManager $dm){
        $cursor = $dm->getDocumentCollection(Meme::class)->find();
        //$meme = $dm->getRepository(Meme::class)->findAll();
        
        return $this->json([
            "memes"=>$cursor->toArray()
        ]);
        //return new Response(json_encode($meme));
    }
}
