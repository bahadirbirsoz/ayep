<?php

namespace Structure\Controller;

use Structure\Controller;

class UrunController extends Controller
{
    public function listeAction($page = 0)
    {
        $this->view->urunler = Structure\Model\Urun::find([
            "limit" => "50",
            "offset" => 50 * $page
        ]);

    }

    public function duzenleAction($urunId)
    {
        if (!$this->auth->isMember()) {
            throw new \Exception();
        }
        $urun = Structure\Model\Urun::find($urunId);

        if (!$urun->canEdit()) {
            throw new \Exception();
        }

        if ($this->request->isPost()) {
            if ($this->isValid()) {
                $this->saveUrun();
            }
        }

    }

    public function silAction($urunId)
    {

    }

    public function ekleAction()
    {

    }


}

