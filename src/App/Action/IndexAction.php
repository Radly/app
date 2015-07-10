<?php

namespace App\Action;

/**
 * Index Action
 *
 * @package App\Action
 */
class IndexAction extends AppAction
{
    public function getMethod()
    {
        $examples = [
            'twig' => $this->getRouter()->generateUrl(['app', 'twig']),
        ];

        $this->getResponder()->setData('examples', $examples);
    }
}