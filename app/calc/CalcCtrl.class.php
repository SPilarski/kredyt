<?php
global $conf;
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';


class CalcCtrl {
    private $messages;
    private $form;
    private $result;
    private $hide_intro;

    public function __construct(){

        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro = false;
    }
    public function getParams(){
        $this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
        $this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
        $this->form->p = isset($_REQUEST ['p']) ? $_REQUEST ['p'] : null;
    }
    public function validate(){
        if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->p ))) {
            return false;
        } else {
            $this->hide_intro = true;
        }

        if ($this->form->x == "") {
            $this->messages->addError('Nie podano kwoty!');
        }
        if ($this->form->y == "") {
            $this->messages->addError('Nie podano lat!');
        }
        if ($this->form->p == "") {
            $this->messages->addError('Nie podano oprocentowania!');
        }

        return ! $this->messages->isError();

    }

    public function operation(){
        $this->getparams();

        if ($this->validate()) {
            $this->form->x=intval($this->form->x);
            $this->form->y=intval($this->form->y);
            $this->messages->addInfo('Parametry poprawne.');

        $this->result->result = $this->form->x + $this->form->x * $this->form->p / (12 * $this->form->y);
        $this->result->result=intval($this->result->result);
        }
        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('hide_intro',$this->hide_intro);

        $smarty->assign('messages',$this->messages);
        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);

        $smarty->display($conf->root_path.'/app/calc/CalcView.html');

    }


}
