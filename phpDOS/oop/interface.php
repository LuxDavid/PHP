<?php

interface SendInterface{
    public function send(string $message);
}

interface SaveInterface{
    public function save();
}

class Document implements SendInterface, SaveInterface{
    public function send(string $message){
        echo "se envia la venta $message";
    }

    public function save(){
        echo "Se guada la venta en la nube";
    }
}

class BeerRepository implements SaveInterface{
    public function save(){
        echo "Se guarda en una bd";
    }
}

class SaveProcess{
    private SaveInterface $saveManager;
    public function __construct(SaveInterface $saveManager){
        $this->saveManager = $saveManager;
    }

    public function keep(){
        echo "hacemos algo antee <br/>";
        $this->saveManager->save();
    }
}

$beerRepository= new BeerRepository();
$document= new Document();
$saveProcess= new SaveProcess($beerRepository);
$saveProcess->keep();