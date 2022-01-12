<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comments;
use App\Form\ArticleType;
use App\Form\CommentsType;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/article.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="article_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('article', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     */
    public function show(Article $article, Request $request): Response
    {

        $comments = new Comments();
        
        $commentForm = $this->createForm(CommentsType::class, $comments);

        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()){
            $comments->setArticle($article);
            $comments->setCreatedAt(new \DateTime('now'));
            $comments = $commentForm->getData();
            //dd($comments);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comments);
            $entityManager->flush();

            return new Response('Test');
            return $this->redirectToRoute('article_show');

        }

        return $this->render('article/show.html.twig', [
            'article' => $article,
            'commentForm' => $commentForm->createView()
           
            
        ]);
    }

    

    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('article', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/favoris/new/{id}", name="new_favoris")
     */
    public function addFavori(ArticleRepository $article)
    {
        
        if(!$article){
            throw new NotFoundHttpException('Pas d\'article trouvé');
        }
        $article->addFavori($this->getUser());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($article);
        $entityManager->flush();
        
        return $this->render('app_home');
        }

     /**
     * @Route("/favoris/delete/{id}", name="delete_favoris")
     */
    public function removeFavori(ArticleRepository $article)
    {
        
        if(!$article){
            throw new NotFoundHttpException('Pas d\'article trouvé');
        }
        $article->removeFavori($this->getUser());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($article);
        $entityManager->flush();
        
        return $this->render('app_home');
        }

    
    
    

    
    


    /**
     * @Route("/{id}", name="article_delete", methods={"POST"})
     */
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('article', [], Response::HTTP_SEE_OTHER);
    }

   
}
